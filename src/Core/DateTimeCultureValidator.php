<?php

namespace TheSslStore\Core;

trait DateTimeCultureValidator
{
	/**
	 * @link https://www.thesslstore.com/api/datetime-culture-list
	 *
	 * @var array
	 */
	public static $cultureList
		= [
			'Afrikaans (South Africa)'                           => 'af-ZA',
			'Albanian (Albania)'                                 => 'sq-AL',
			'Alsatian (France)'                                  => 'gsw-FR',
			'Amharic (Ethiopia)'                                 => 'am-ET',
			'Arabic (Algeria)'                                   => 'ar-DZ',
			'Arabic (Bahrain)'                                   => 'ar-BH',
			'Arabic (Egypt)'                                     => 'ar-EG',
			'Arabic (Iraq)'                                      => 'ar-IQ',
			'Arabic (Jordan)'                                    => 'ar-JO',
			'Arabic (Kuwait)'                                    => 'ar-KW',
			'Arabic (Lebanon)'                                   => 'ar-LB',
			'Arabic (Libya)'                                     => 'ar-LY',
			'Arabic (Morocco)'                                   => 'ar-MA',
			'Arabic (Oman)'                                      => 'ar-OM',
			'Arabic (Qatar)'                                     => 'ar-QA',
			'Arabic (Saudi Arabia)'                              => 'ar-SA',
			'Arabic (Syria)'                                     => 'ar-SY',
			'Arabic (Tunisia)'                                   => 'ar-TN',
			'Arabic (U.A.E.)'                                    => 'ar-AE',
			'Arabic (Yemen)'                                     => 'ar-YE',
			'Armenian (Armenia)'                                 => 'hy-AM',
			'Assamese (India)'                                   => 'as-IN',
			'Azerbaijani (Cyrillic, Azerbaijan)'                 => 'az-Cyrl-AZ',
			'Azerbaijani (Latin, Azerbaijan)'                    => 'az-Latn-AZ',
			'Bangla (Bangladesh)'                                => 'bn-BD',
			'Bangla (India)'                                     => 'bn-IN',
			'Bashkir (Russia)'                                   => 'ba-RU',
			'Basque (Basque)'                                    => 'eu-ES',
			'Belarusian (Belarus)'                               => 'be-BY',
			'Bosnian (Cyrillic, Bosnia and Herzegovina)'         => 'bs-Cyrl-BA',
			'Bosnian (Latin, Bosnia and Herzegovina)'            => 'bs-Latn-BA',
			'Breton (France)'                                    => 'br-FR',
			'Bulgarian (Bulgaria)'                               => 'bg-BG',
			'Burmese (Myanmar)'                                  => 'my-MM',
			'Catalan (Catalan)'                                  => 'ca-ES',
			'Central Atlas Tamazight (Latin, Algeria)'           => 'tzm-Latn-DZ',
			'Central Atlas Tamazight (Tifinagh, Morocco)'        => 'tzm-Tfng-MA',
			'Central Kurdish (Iraq)'                             => 'ku-Arab-IQ',
			'Cherokee (Cherokee)'                                => 'chr-Cher-US',
			'Chinese (Simplified, China)'                        => 'zh-CN',
			'Chinese (Simplified, Singapore)'                    => 'zh-SG',
			'Chinese (Traditional, Hong Kong SAR)'               => 'zh-HK',
			'Chinese (Traditional, Macao SAR)'                   => 'zh-MO',
			'Chinese (Traditional, Taiwan)'                      => 'zh-TW',
			'Corsican (France)'                                  => 'co-FR',
			'Croatian (Croatia)'                                 => 'hr-HR',
			'Croatian (Latin, Bosnia and Herzegovina)'           => 'hr-BA',
			'Czech (Czech Republic)'                             => 'cs-CZ',
			'Danish (Denmark)'                                   => 'da-DK',
			'Dari (Afghanistan)'                                 => 'prs-AF',
			'Divehi (Maldives)'                                  => 'dv-MV',
			'Dutch (Belgium)'                                    => 'nl-BE',
			'Dutch (Netherlands)'                                => 'nl-NL',
			'English (Australia)'                                => 'en-AU',
			'English (Belize)'                                   => 'en-BZ',
			'English (Canada)'                                   => 'en-CA',
			'English (Caribbean)'                                => 'en-029',
			'English (Hong Kong)'                                => 'en-HK',
			'English (India)'                                    => 'en-IN',
			'English (Ireland)'                                  => 'en-IE',
			'English (Jamaica)'                                  => 'en-JM',
			'English (Malaysia)'                                 => 'en-MY',
			'English (New Zealand)'                              => 'en-NZ',
			'English (Philippines)'                              => 'en-PH',
			'English (Singapore)'                                => 'en-SG',
			'English (South Africa)'                             => 'en-ZA',
			'English (Trinidad and Tobago)'                      => 'en-TT',
			'English (United Kingdom)'                           => 'en-GB',
			'English (United States)'                            => 'en-US',
			'English (Zimbabwe)'                                 => 'en-ZW',
			'Estonian (Estonia)'                                 => 'et-EE',
			'Faroese (Faroe Islands)'                            => 'fo-FO',
			'Filipino (Philippines)'                             => 'fil-PH',
			'Finnish (Finland)'                                  => 'fi-FI',
			'French (Belgium)'                                   => 'fr-BE',
			'French (Cameroon)'                                  => 'fr-CM',
			'French (Canada)'                                    => 'fr-CA',
			'French (Congo [DRC])'                               => 'fr-CD',
			'French (France)'                                    => 'fr-FR',
			'French (Haiti)'                                     => 'fr-HT',
			'French (Ivory Coast)'                               => 'fr-CI',
			'French (Luxembourg)'                                => 'fr-LU',
			'French (Mali)'                                      => 'fr-ML',
			'French (Monaco)'                                    => 'fr-MC',
			'French (Morocco)'                                   => 'fr-MA',
			'French (Réunion)'                                   => 'fr-RE',
			'French (Senegal)'                                   => 'fr-SN',
			'French (Switzerland)'                               => 'fr-CH',
			'Frisian (Netherlands)'                              => 'fy-NL',
			'Fulah (Latin, Senegal)'                             => 'ff-Latn-SN',
			'Galician (Galician)'                                => 'gl-ES',
			'Georgian (Georgia)'                                 => 'ka-GE',
			'German (Austria)'                                   => 'de-AT',
			'German (Germany)'                                   => 'de-DE',
			'German (Liechtenstein)'                             => 'de-LI',
			'German (Luxembourg)'                                => 'de-LU',
			'German (Switzerland)'                               => 'de-CH',
			'Greek (Greece)'                                     => 'el-GR',
			'Greenlandic (Greenland)'                            => 'kl-GL',
			'Guarani (Paraguay)'                                 => 'gn-PY',
			'Gujarati (India)'                                   => 'gu-IN',
			'Hausa (Latin, Nigeria)'                             => 'ha-Latn-NG',
			'Hawaiian (United States)'                           => 'haw-US',
			'Hebrew (Israel)'                                    => 'he-IL',
			'Hindi (India)'                                      => 'hi-IN',
			'Hungarian (Hungary)'                                => 'hu-HU',
			'Icelandic (Iceland)'                                => 'is-IS',
			'Igbo (Nigeria)'                                     => 'ig-NG',
			'Indonesian (Indonesia)'                             => 'id-ID',
			'Inuktitut (Latin, Canada)'                          => 'iu-Latn-CA',
			'Inuktitut (Syllabics, Canada)'                      => 'iu-Cans-CA',
			'Irish (Ireland)'                                    => 'ga-IE',
			'isiXhosa (South Africa)'                            => 'xh-ZA',
			'isiZulu (South Africa)'                             => 'zu-ZA',
			'Italian (Italy)'                                    => 'it-IT',
			'Italian (Switzerland)'                              => 'it-CH',
			'Japanese (Japan)'                                   => 'ja-JP',
			'Javanese (Indonesia)'                               => 'jv-Latn-ID',
			'Kannada (India)'                                    => 'kn-IN',
			'Kazakh (Kazakhstan)'                                => 'kk-KZ',
			'Khmer (Cambodia)'                                   => 'km-KH',
			'K’iche’ (Guatemala)'                                => 'qut-GT',
			'Kinyarwanda (Rwanda)'                               => 'rw-RW',
			'Kiswahili (Kenya)'                                  => 'sw-KE',
			'Konkani (India)'                                    => 'kok-IN',
			'Korean (Korea)'                                     => 'ko-KR',
			'Kyrgyz (Kyrgyzstan)'                                => 'ky-KG',
			'Lao (Lao PDR)'                                      => 'lo-LA',
			'Latvian (Latvia)'                                   => 'lv-LV',
			'Lithuanian (Lithuania)'                             => 'lt-LT',
			'Lower Sorbian (Germany)'                            => 'dsb-DE',
			'Luxembourgish (Luxembourg)'                         => 'lb-LU',
			'Macedonian (Former Yugoslav Republic of Macedonia)' => 'mk-MK',
		];

	public static function validateCultureDateTime(array $args)
	{
		if (!($DateTimeCulture = $args['DateTimeCulture'] ?? NULL)) {
			throw new \InvalidArgumentException(
				sprintf(
					'Required "DateTimeCulture" is missing.Allowed values are : %s'
					, implode(',', self::$cultureList)
				)
			);
		};

		if (!in_array($DateTimeCulture, self::$cultureList)) {
			throw new \InvalidArgumentException(
				'Invalid date time culture type: '.$DateTimeCulture
			);
		}
	}
}
