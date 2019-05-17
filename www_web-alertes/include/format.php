<?php

class format {
	
	/**
	 * Convert a localized number string into a floating point number
	 *
	 * @param	string $string The localized number string to convert.
	 * @return		float|string $float The converted number.
	 */
	static public function str2float( $string, $output_float = true) {
		foreach ( localeconv() as $key => $val)
			${$key} = $val;
		$string = trim( (string) $string);
		$negative = ( 0 === $n_sign_posn && '(' === $string{0} && ')' === $string{strlen( $string) - 1});
		$string = preg_replace( '/[^' . preg_quote( $negative_sign . $decimal_point . $mon_decimal_point) . '\d]+/', '', trim( (string) $string));
		$length = strlen( $string);
		if ( strlen( $decimal_point))
			$string = str_replace( $decimal_point, '.', $string);
		if ( strlen( $mon_decimal_point)) 
			$string = str_replace( $mon_decimal_point, '.', $string);
		if ( strlen( $negative_sign) && 0 !== $n_sign_posn) {
			$negative = ( $negative_sign === $string{0} || $negative_sign === $string{$length - 1});
			if ( $negative) {
				$string = str_replace( $negative_sign, '', $string);
			}
		}
		if ( $output_float) {
			$float = (float) $string;
			if ( $negative) $float = -$float;
		} else {
			$float = ( $negative) ? "-$string" : $string;
		}
		return $float;
	}

	/**
	 * Convert a floating point number into a non-localized or localized number string
	 *
	 * @param	float $float The converted number.
	 * @return		string $string The localized number string to convert.
	 */
	static public function float2str( $float, $localized = true, $decimals = 2) {
		if ( $localized) {
			foreach ( localeconv() as $key => $val)
				${$key} = $val;
			$string = number_format( $float, $decimals, $decimal_point, $thousands_sep);
		} else {
			$string = number_format( $float, $decimals, '.', '');
		}
		return $string;
	}
}

?>
