<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Language extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->index('code');
            $table->string('displayName');
            $table->string('cultureCode');
            $table->string('iso639xValue');
        });
        $data = array(
            array('code' => 'af-ZA', 'displayName' => 'Afrikaans - South Africa' , 'cultureCode' => '0x0436', 'iso639xValue' => 'AFK'),
            array('code' => 'sq-AL', 'displayName' => 'Albanian - Albania' , 'cultureCode' => '0x041C', 'iso639xValue' => 'SQI'),
            array('code' => 'ar-DZ', 'displayName' => 'Arabic - Algeria' , 'cultureCode' => '0x1401', 'iso639xValue' => 'ARG'),
            array('code' => 'ar-BH', 'displayName' => 'Arabic - Bahrain' , 'cultureCode' => '0x3C01', 'iso639xValue' => 'ARH'),
            array('code' => 'ar-EG', 'displayName' => 'Arabic - Egypt' , 'cultureCode' => '0x0C01', 'iso639xValue' => 'ARE'),
            array('code' => 'ar-IQ', 'displayName' => 'Arabic - Iraq' , 'cultureCode' => '0x0801', 'iso639xValue' => 'ARI'),
            array('code' => 'ar-JO', 'displayName' => 'Arabic - Jordan' , 'cultureCode' => '0x2C01', 'iso639xValue' => 'ARJ'),
            array('code' => 'ar-KW', 'displayName' => 'Arabic - Kuwait' , 'cultureCode' => '0x3401', 'iso639xValue' => 'ARK'),
            array('code' => 'ar-LB', 'displayName' => 'Arabic - Lebanon' , 'cultureCode' => '0x3001', 'iso639xValue' => 'ARB'),
            array('code' => 'ar-LY', 'displayName' => 'Arabic - Libya' , 'cultureCode' => '0x1001', 'iso639xValue' => 'ARL'),
            array('code' => 'ar-MA', 'displayName' => 'Arabic - Morocco' , 'cultureCode' => '0x1801', 'iso639xValue' => 'ARM'),
            array('code' => 'ar-OM', 'displayName' => 'Arabic - Oman' , 'cultureCode' => '0x2001', 'iso639xValue' => 'ARO'),
            array('code' => 'ar-QA', 'displayName' => 'Arabic - Qatar' , 'cultureCode' => '0x4001', 'iso639xValue' => 'ARQ'),
            array('code' => 'ar-SA', 'displayName' => 'Arabic - Saudi Arabia' , 'cultureCode' => '0x0401', 'iso639xValue' => 'ARA'),
            array('code' => 'ar-SY', 'displayName' => 'Arabic - Syria' , 'cultureCode' => '0x2801', 'iso639xValue' => 'ARS'),
            array('code' => 'ar-TN', 'displayName' => 'Arabic - Tunisia' , 'cultureCode' => '0x1C01', 'iso639xValue' => 'ART'),
            array('code' => 'ar-AE', 'displayName' => 'Arabic - United Arab Emirates' , 'cultureCode' => '0x3801', 'iso639xValue' => 'ARU'),
            array('code' => 'ar-YE', 'displayName' => 'Arabic - Yemen' , 'cultureCode' => '0x2401', 'iso639xValue' => 'ARY'),
            array('code' => 'hy-AM', 'displayName' => 'Armenian - Armenia' , 'cultureCode' => '0x042B', 'iso639xValue' => ''),
            array('code' => 'Cy-az-AZ', 'displayName' => 'Azeri (Cyrillic) - Azerbaijan' , 'cultureCode' => '0x082C', 'iso639xValue' => ''),
            array('code' => 'Lt-az-AZ', 'displayName' => 'Azeri (Latin) - Azerbaijan' , 'cultureCode' => '0x042C', 'iso639xValue' => ''),
            array('code' => 'eu-ES', 'displayName' => 'Basque - Basque' , 'cultureCode' => '0x042D', 'iso639xValue' => 'EUQ'),
            array('code' => 'be-BY', 'displayName' => 'Belarusian - Belarus' , 'cultureCode' => '0x0423', 'iso639xValue' => 'BEL'),
            array('code' => 'bg-BG', 'displayName' => 'Bulgarian - Bulgaria' , 'cultureCode' => '0x0402', 'iso639xValue' => 'BGR'),
            array('code' => 'ca-ES', 'displayName' => 'Catalan - Catalan' , 'cultureCode' => '0x0403', 'iso639xValue' => 'CAT'),
            array('code' => 'zh-CN', 'displayName' => 'Chinese - China' , 'cultureCode' => '0x0804', 'iso639xValue' => 'CHS'),
            array('code' => 'zh-HK', 'displayName' => 'Chinese - Hong Kong SAR' , 'cultureCode' => '0x0C04', 'iso639xValue' => 'ZHH'),
            array('code' => 'zh-MO', 'displayName' => 'Chinese - Macau SAR' , 'cultureCode' => '0x1404', 'iso639xValue' => ''),
            array('code' => 'zh-SG', 'displayName' => 'Chinese - Singapore' , 'cultureCode' => '0x1004', 'iso639xValue' => 'ZHI'),
            array('code' => 'zh-TW', 'displayName' => 'Chinese - Taiwan' , 'cultureCode' => '0x0404', 'iso639xValue' => 'CHT'),
            array('code' => 'zh-CHS', 'displayName' => 'Chinese (Simplified)' , 'cultureCode' => '0x0004', 'iso639xValue' => ''),
            array('code' => 'zh-CHT', 'displayName' => 'Chinese (Traditional)' , 'cultureCode' => '0x7C04', 'iso639xValue' => ''),
            array('code' => 'hr-HR', 'displayName' => 'Croatian - Croatia' , 'cultureCode' => '0x041A', 'iso639xValue' => 'HRV'),
            array('code' => 'cs-CZ', 'displayName' => 'Czech - Czech Republic' , 'cultureCode' => '0x0405', 'iso639xValue' => 'CSY'),
            array('code' => 'da-DK', 'displayName' => 'Danish - Denmark' , 'cultureCode' => '0x0406', 'iso639xValue' => 'DAN'),
            array('code' => 'div-MV', 'displayName' => 'Dhivehi - Maldives' , 'cultureCode' => '0x0465', 'iso639xValue' => ''),
            array('code' => 'nl-BE', 'displayName' => 'Dutch - Belgium' , 'cultureCode' => '0x0813', 'iso639xValue' => 'NLB'),
            array('code' => 'nl-NL', 'displayName' => 'Dutch - The Netherlands' , 'cultureCode' => '0x0413', 'iso639xValue' => ''),
            array('code' => 'en-AU', 'displayName' => 'English - Australia' , 'cultureCode' => '0x0C09', 'iso639xValue' => 'ENA'),
            array('code' => 'en-BZ', 'displayName' => 'English - Belize' , 'cultureCode' => '0x2809', 'iso639xValue' => 'ENL'),
            array('code' => 'en-CA', 'displayName' => 'English - Canada' , 'cultureCode' => '0x1009', 'iso639xValue' => 'ENC'),
            array('code' => 'en-CB', 'displayName' => 'English - Caribbean' , 'cultureCode' => '0x2409', 'iso639xValue' => ''),
            array('code' => 'en-IE', 'displayName' => 'English - Ireland' , 'cultureCode' => '0x1809', 'iso639xValue' => 'ENI'),
            array('code' => 'en-JM', 'displayName' => 'English - Jamaica' , 'cultureCode' => '0x2009', 'iso639xValue' => 'ENJ'),
            array('code' => 'en-NZ', 'displayName' => 'English - New Zealand' , 'cultureCode' => '0x1409', 'iso639xValue' => 'ENZ'),
            array('code' => 'en-PH', 'displayName' => 'English - Philippines' , 'cultureCode' => '0x3409', 'iso639xValue' => ''),
            array('code' => 'en-ZA', 'displayName' => 'English - South Africa' , 'cultureCode' => '0x1C09', 'iso639xValue' => 'ENS'),
            array('code' => 'en-TT', 'displayName' => 'English - Trinidad and Tobago' , 'cultureCode' => '0x2C09', 'iso639xValue' => 'ENT'),
            array('code' => 'en-GB', 'displayName' => 'English - United Kingdom' , 'cultureCode' => '0x0809', 'iso639xValue' => 'ENG'),
            array('code' => 'en-US', 'displayName' => 'English - United States' , 'cultureCode' => '0x0409', 'iso639xValue' => 'ENU'),
            array('code' => 'en-ZW', 'displayName' => 'English - Zimbabwe' , 'cultureCode' => '0x3009', 'iso639xValue' => ''),
            array('code' => 'et-EE', 'displayName' => 'Estonian - Estonia' , 'cultureCode' => '0x0425', 'iso639xValue' => 'ETI'),
            array('code' => 'fo-FO', 'displayName' => 'Faroese - Faroe Islands' , 'cultureCode' => '0x0438', 'iso639xValue' => 'FOS'),
            array('code' => 'fa-IR', 'displayName' => 'Farsi - Iran' , 'cultureCode' => '0x0429', 'iso639xValue' => 'FAR'),
            array('code' => 'fi-FI', 'displayName' => 'Finnish - Finland' , 'cultureCode' => '0x040B', 'iso639xValue' => 'FIN'),
            array('code' => 'fr-BE', 'displayName' => 'French - Belgium' , 'cultureCode' => '0x080C', 'iso639xValue' => 'FRB'),
            array('code' => 'fr-CA', 'displayName' => 'French - Canada' , 'cultureCode' => '0x0C0C', 'iso639xValue' => 'FRC'),
            array('code' => 'fr-FR', 'displayName' => 'French - France' , 'cultureCode' => '0x040C', 'iso639xValue' => ''),
            array('code' => 'fr-LU', 'displayName' => 'French - Luxembourg' , 'cultureCode' => '0x140C', 'iso639xValue' => 'FRL'),
            array('code' => 'fr-MC', 'displayName' => 'French - Monaco' , 'cultureCode' => '0x180C', 'iso639xValue' => ''),
            array('code' => 'fr-CH', 'displayName' => 'French - Switzerland' , 'cultureCode' => '0x100C', 'iso639xValue' => 'FRS'),
            array('code' => 'gl-ES', 'displayName' => 'Galician - Galician' , 'cultureCode' => '0x0456', 'iso639xValue' => ''),
            array('code' => 'ka-GE', 'displayName' => 'Georgian - Georgia' , 'cultureCode' => '0x0437', 'iso639xValue' => ''),
            array('code' => 'de-AT', 'displayName' => 'German - Austria' , 'cultureCode' => '0x0C07', 'iso639xValue' => 'DEA'),
            array('code' => 'de-DE', 'displayName' => 'German - Germany' , 'cultureCode' => '0x0407', 'iso639xValue' => ''),
            array('code' => 'de-LI', 'displayName' => 'German - Liechtenstein' , 'cultureCode' => '0x1407', 'iso639xValue' => 'DEC'),
            array('code' => 'de-LU', 'displayName' => 'German - Luxembourg' , 'cultureCode' => '0x1007', 'iso639xValue' => 'DEL'),
            array('code' => 'de-CH', 'displayName' => 'German - Switzerland' , 'cultureCode' => '0x0807', 'iso639xValue' => 'DES'),
            array('code' => 'el-GR', 'displayName' => 'Greek - Greece' , 'cultureCode' => '0x0408', 'iso639xValue' => 'ELL'),
            array('code' => 'gu-IN', 'displayName' => 'Gujarati - India' , 'cultureCode' => '0x0447', 'iso639xValue' => ''),
            array('code' => 'he-IL', 'displayName' => 'Hebrew - Israel' , 'cultureCode' => '0x040D', 'iso639xValue' => 'HEB'),
            array('code' => 'hi-IN', 'displayName' => 'Hindi - India' , 'cultureCode' => '0x0439', 'iso639xValue' => 'HIN'),
            array('code' => 'hu-HU', 'displayName' => 'Hungarian - Hungary' , 'cultureCode' => '0x040E', 'iso639xValue' => 'HUN'),
            array('code' => 'is-IS', 'displayName' => 'Icelandic - Iceland' , 'cultureCode' => '0x040F', 'iso639xValue' => 'ISL'),
            array('code' => 'id-ID', 'displayName' => 'Indonesian - Indonesia' , 'cultureCode' => '0x0421', 'iso639xValue' => ''),
            array('code' => 'it-IT', 'displayName' => 'Italian - Italy' , 'cultureCode' => '0x0410', 'iso639xValue' => ''),
            array('code' => 'it-CH', 'displayName' => 'Italian - Switzerland' , 'cultureCode' => '0x0810', 'iso639xValue' => 'ITS'),
            array('code' => 'ja-JP', 'displayName' => 'Japanese - Japan' , 'cultureCode' => '0x0411', 'iso639xValue' => 'JPN'),
            array('code' => 'kn-IN', 'displayName' => 'Kannada - India' , 'cultureCode' => '0x044B', 'iso639xValue' => ''),
            array('code' => 'kk-KZ', 'displayName' => 'Kazakh - Kazakhstan' , 'cultureCode' => '0x043F', 'iso639xValue' => ''),
            array('code' => 'kok-IN', 'displayName' => 'Konkani - India' , 'cultureCode' => '0x0457', 'iso639xValue' => ''),
            array('code' => 'ko-KR', 'displayName' => 'Korean - Korea' , 'cultureCode' => '0x0412', 'iso639xValue' => 'KOR'),
            array('code' => 'ky-KZ', 'displayName' => 'Kyrgyz - Kazakhstan' , 'cultureCode' => '0x0440', 'iso639xValue' => ''),
            array('code' => 'lv-LV', 'displayName' => 'Latvian - Latvia' , 'cultureCode' => '0x0426', 'iso639xValue' => 'LVI'),
            array('code' => 'lt-LT', 'displayName' => 'Lithuanian - Lithuania' , 'cultureCode' => '0x0427', 'iso639xValue' => 'LTH'),
            array('code' => 'mk-MK', 'displayName' => 'Macedonian (FYROM)' , 'cultureCode' => '0x042F', 'iso639xValue' => 'MKD'),
            array('code' => 'ms-BN', 'displayName' => 'Malay - Brunei' , 'cultureCode' => '0x083E', 'iso639xValue' => ''),
            array('code' => 'ms-MY', 'displayName' => 'Malay - Malaysia' , 'cultureCode' => '0x043E', 'iso639xValue' => ''),
            array('code' => 'mr-IN', 'displayName' => 'Marathi - India' , 'cultureCode' => '0x044E', 'iso639xValue' => ''),
            array('code' => 'mn-MN', 'displayName' => 'Mongolian - Mongolia' , 'cultureCode' => '0x0450', 'iso639xValue' => ''),
            array('code' => 'nb-NO', 'displayName' => 'Norwegian (Bokmål) - Norway' , 'cultureCode' => '0x0414', 'iso639xValue' => ''),
            array('code' => 'nn-NO', 'displayName' => 'Norwegian (Nynorsk) - Norway' , 'cultureCode' => '0x0814', 'iso639xValue' => ''),
            array('code' => 'pl-PL', 'displayName' => 'Polish - Poland' , 'cultureCode' => '0x0415', 'iso639xValue' => 'PLK'),
            array('code' => 'pt-BR', 'displayName' => 'Portuguese - Brazil' , 'cultureCode' => '0x0416', 'iso639xValue' => 'PTB'),
            array('code' => 'pt-PT', 'displayName' => 'Portuguese - Portugal' , 'cultureCode' => '0x0816', 'iso639xValue' => ''),
            array('code' => 'pa-IN', 'displayName' => 'Punjabi - India' , 'cultureCode' => '0x0446', 'iso639xValue' => ''),
            array('code' => 'ro-RO', 'displayName' => 'Romanian - Romania' , 'cultureCode' => '0x0418', 'iso639xValue' => 'ROM'),
            array('code' => 'ru-RU', 'displayName' => 'Russian - Russia' , 'cultureCode' => '0x0419', 'iso639xValue' => 'RUS'),
            array('code' => 'sa-IN', 'displayName' => 'Sanskrit - India' , 'cultureCode' => '0x044F', 'iso639xValue' => ''),
            array('code' => 'Cy-sr-SP', 'displayName' => 'Serbian (Cyrillic) - Serbia' , 'cultureCode' => '0x0C1A', 'iso639xValue' => ''),
            array('code' => 'Lt-sr-SP', 'displayName' => 'Serbian (Latin) - Serbia' , 'cultureCode' => '0x081A', 'iso639xValue' => ''),
            array('code' => 'sk-SK', 'displayName' => 'Slovak - Slovakia' , 'cultureCode' => '0x041B', 'iso639xValue' => 'SKY'),
            array('code' => 'sl-SI', 'displayName' => 'Slovenian - Slovenia' , 'cultureCode' => '0x0424', 'iso639xValue' => 'SLV'),
            array('code' => 'es-AR', 'displayName' => 'Spanish - Argentina' , 'cultureCode' => '0x2C0A', 'iso639xValue' => 'ESS'),
            array('code' => 'es-BO', 'displayName' => 'Spanish - Bolivia' , 'cultureCode' => '0x400A', 'iso639xValue' => 'ESB'),
            array('code' => 'es-CL', 'displayName' => 'Spanish - Chile' , 'cultureCode' => '0x340A', 'iso639xValue' => 'ESL'),
            array('code' => 'es-CO', 'displayName' => 'Spanish - Colombia' , 'cultureCode' => '0x240A', 'iso639xValue' => 'ESO'),
            array('code' => 'es-CR', 'displayName' => 'Spanish - Costa Rica' , 'cultureCode' => '0x140A', 'iso639xValue' => 'ESC'),
            array('code' => 'es-DO', 'displayName' => 'Spanish - Dominican Republic' , 'cultureCode' => '0x1C0A', 'iso639xValue' => 'ESD'),
            array('code' => 'es-EC', 'displayName' => 'Spanish - Ecuador' , 'cultureCode' => '0x300A', 'iso639xValue' => 'ESF'),
            array('code' => 'es-SV', 'displayName' => 'Spanish - El Salvador' , 'cultureCode' => '0x440A', 'iso639xValue' => 'ESE'),
            array('code' => 'es-GT', 'displayName' => 'Spanish - Guatemala' , 'cultureCode' => '0x100A', 'iso639xValue' => 'ESG'),
            array('code' => 'es-HN', 'displayName' => 'Spanish - Honduras' , 'cultureCode' => '0x480A', 'iso639xValue' => 'ESH'),
            array('code' => 'es-MX', 'displayName' => 'Spanish - Mexico' , 'cultureCode' => '0x080A', 'iso639xValue' => 'ESM'),
            array('code' => 'es-NI', 'displayName' => 'Spanish - Nicaragua' , 'cultureCode' => '0x4C0A', 'iso639xValue' => 'ESI'),
            array('code' => 'es-PA', 'displayName' => 'Spanish - Panama' , 'cultureCode' => '0x180A', 'iso639xValue' => 'ESA'),
            array('code' => 'es-PY', 'displayName' => 'Spanish - Paraguay' , 'cultureCode' => '0x3C0A', 'iso639xValue' => 'ESZ'),
            array('code' => 'es-PE', 'displayName' => 'Spanish - Peru' , 'cultureCode' => '0x280A', 'iso639xValue' => 'ESR'),
            array('code' => 'es-PR', 'displayName' => 'Spanish - Puerto Rico' , 'cultureCode' => '0x500A', 'iso639xValue' => 'ES'),
            array('code' => 'es-ES', 'displayName' => 'Spanish - Spain' , 'cultureCode' => '0x0C0A', 'iso639xValue' => ''),
            array('code' => 'es-UY', 'displayName' => 'Spanish - Uruguay' , 'cultureCode' => '0x380A', 'iso639xValue' => 'ESY'),
            array('code' => 'es-VE', 'displayName' => 'Spanish - Venezuela' , 'cultureCode' => '0x200A', 'iso639xValue' => 'ESV'),
            array('code' => 'sw-KE', 'displayName' => 'Swahili - Kenya' , 'cultureCode' => '0x0441', 'iso639xValue' => ''),
            array('code' => 'sv-FI', 'displayName' => 'Swedish - Finland' , 'cultureCode' => '0x081D', 'iso639xValue' => 'SVF'),
            array('code' => 'sv-SE', 'displayName' => 'Swedish - Sweden' , 'cultureCode' => '0x041D', 'iso639xValue' => ''),
            array('code' => 'syr-SY', 'displayName' => 'Syriac - Syria' , 'cultureCode' => '0x045A', 'iso639xValue' => ''),
            array('code' => 'ta-IN', 'displayName' => 'Tamil - India' , 'cultureCode' => '0x0449', 'iso639xValue' => ''),
            array('code' => 'tt-RU', 'displayName' => 'Tatar - Russia' , 'cultureCode' => '0x0444', 'iso639xValue' => ''),
            array('code' => 'te-IN', 'displayName' => 'Telugu - India' , 'cultureCode' => '0x044A', 'iso639xValue' => ''),
            array('code' => 'th-TH', 'displayName' => 'Thai - Thailand' , 'cultureCode' => '0x041E', 'iso639xValue' => 'THA'),
            array('code' => 'tr-TR', 'displayName' => 'Turkish - Turkey' , 'cultureCode' => '0x041F', 'iso639xValue' => 'TRK'),
            array('code' => 'uk-UA', 'displayName' => 'Ukrainian - Ukraine' , 'cultureCode' => '0x0422', 'iso639xValue' => 'UKR'),
            array('code' => 'ur-PK', 'displayName' => 'Urdu - Pakistan' , 'cultureCode' => '0x0420', 'iso639xValue' => 'URD'),
            array('code' => 'Cy-uz-UZ', 'displayName' => 'Uzbek (Cyrillic) - Uzbekistan' , 'cultureCode' => '0x0843', 'iso639xValue' => ''),
            array('code' => 'Lt-uz-UZ', 'displayName' => 'Uzbek (Latin) - Uzbekistan' , 'cultureCode' => '0x0443', 'iso639xValue' => ''),
            array('code' => 'vi-VN', 'displayName' => 'Vietnamese - Vietnam' , 'cultureCode' => '0x042A', 'iso639xValue' => 'VIT'),

        );
        DB::table('languages')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('languages');
    }
}
