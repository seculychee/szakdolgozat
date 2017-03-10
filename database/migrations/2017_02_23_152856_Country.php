<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Country extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('countryCode');
            $table->index('countryCode');
            $table->string('phonePrefix');
        });
        $data = array(
            array('name' => 'Afghanistan', 'countryCode' => 'AFG', 'phonePrefix' => '355'),
            array('name' => 'Albania', 'countryCode' => 'ALB', 'phonePrefix' => '213'),
            array('name' => 'Algeria', 'countryCode' => 'DZA', 'phonePrefix' => '1-684'),
            array('name' => 'American Samoa', 'countryCode' => 'ASM', 'phonePrefix' => '376'),
            array('name' => 'Andorra', 'countryCode' => 'AND', 'phonePrefix' => '244'),
            array('name' => 'Angola', 'countryCode' => 'AGO', 'phonePrefix' => '1-264'),
            array('name' => 'Anguilla', 'countryCode' => 'AIA', 'phonePrefix' => '672'),
            array('name' => 'Antarctica', 'countryCode' => 'ATA', 'phonePrefix' => '1-268'),
            array('name' => 'Antigua and Barbuda', 'countryCode' => 'ATG', 'phonePrefix' => '54'),
            array('name' => 'Argentina', 'countryCode' => 'ARG', 'phonePrefix' => '374'),
            array('name' => 'Armenia', 'countryCode' => 'ARM', 'phonePrefix' => '297'),
            array('name' => 'Aruba', 'countryCode' => 'ABW', 'phonePrefix' => '61'),
            array('name' => 'Australia', 'countryCode' => 'AUS', 'phonePrefix' => '43'),
            array('name' => 'Austria', 'countryCode' => 'AUT', 'phonePrefix' => '994'),
            array('name' => 'Azerbaijan', 'countryCode' => 'AZE', 'phonePrefix' => '1-242'),
            array('name' => 'Bahamas', 'countryCode' => 'BHS', 'phonePrefix' => '973'),
            array('name' => 'Bahrain', 'countryCode' => 'BHR', 'phonePrefix' => '880'),
            array('name' => 'Bangladesh', 'countryCode' => 'BGD', 'phonePrefix' => '1-246'),
            array('name' => 'Barbados', 'countryCode' => 'BRB', 'phonePrefix' => '375'),
            array('name' => 'Belarus', 'countryCode' => 'BLR', 'phonePrefix' => '32'),
            array('name' => 'Belgium', 'countryCode' => 'BEL', 'phonePrefix' => '501'),
            array('name' => 'Belize', 'countryCode' => 'BLZ', 'phonePrefix' => '229'),
            array('name' => 'Benin', 'countryCode' => 'BEN', 'phonePrefix' => '1-441'),
            array('name' => 'Bermuda', 'countryCode' => 'BMU', 'phonePrefix' => '975'),
            array('name' => 'Bhutan', 'countryCode' => 'BTN', 'phonePrefix' => '591'),
            array('name' => 'Bolivia', 'countryCode' => 'BOL', 'phonePrefix' => '387'),
            array('name' => 'Bosnia and Herzegovina', 'countryCode' => 'BIH', 'phonePrefix' => '267'),
            array('name' => 'Botswana', 'countryCode' => 'BWA', 'phonePrefix' => '55'),
            array('name' => 'Brazil', 'countryCode' => 'BRA', 'phonePrefix' => '246'),
            array('name' => 'British Indian Ocean Territory', 'countryCode' => 'IOT', 'phonePrefix' => '1-284'),
            array('name' => 'British Virgin Islands', 'countryCode' => 'VGB', 'phonePrefix' => '673'),
            array('name' => 'Brunei', 'countryCode' => 'BRN', 'phonePrefix' => '359'),
            array('name' => 'Bulgaria', 'countryCode' => 'BGR', 'phonePrefix' => '226'),
            array('name' => 'Burkina Faso', 'countryCode' => 'BFA', 'phonePrefix' => '257'),
            array('name' => 'Burundi', 'countryCode' => 'BDI', 'phonePrefix' => '855'),
            array('name' => 'Cambodia', 'countryCode' => 'KHM', 'phonePrefix' => '237'),
            array('name' => 'Cameroon', 'countryCode' => 'CMR', 'phonePrefix' => '1'),
            array('name' => 'Canada', 'countryCode' => 'CAN', 'phonePrefix' => '238'),
            array('name' => 'Cape Verde', 'countryCode' => 'CPV', 'phonePrefix' => '1-345'),
            array('name' => 'Cayman Islands', 'countryCode' => 'CYM', 'phonePrefix' => '236'),
            array('name' => 'Central African Republic', 'countryCode' => 'CAF', 'phonePrefix' => '235'),
            array('name' => 'Chad', 'countryCode' => 'TCD', 'phonePrefix' => '56'),
            array('name' => 'Chile', 'countryCode' => 'CHL', 'phonePrefix' => '86'),
            array('name' => 'China', 'countryCode' => 'CHN', 'phonePrefix' => '61'),
            array('name' => 'Christmas Island', 'countryCode' => 'CXR', 'phonePrefix' => '61'),
            array('name' => 'Cocos Islands', 'countryCode' => 'CCK', 'phonePrefix' => '57'),
            array('name' => 'Colombia', 'countryCode' => 'COL', 'phonePrefix' => '269'),
            array('name' => 'Comoros', 'countryCode' => 'COM', 'phonePrefix' => '682'),
            array('name' => 'Cook Islands', 'countryCode' => 'COK', 'phonePrefix' => '506'),
            array('name' => 'Costa Rica', 'countryCode' => 'CRI', 'phonePrefix' => '385'),
            array('name' => 'Croatia', 'countryCode' => 'HRV', 'phonePrefix' => '53'),
            array('name' => 'Cuba', 'countryCode' => 'CUB', 'phonePrefix' => '599'),
            array('name' => 'Curacao', 'countryCode' => 'CUW', 'phonePrefix' => '357'),
            array('name' => 'Cyprus', 'countryCode' => 'CYP', 'phonePrefix' => '420'),
            array('name' => 'Czech Republic', 'countryCode' => 'CZE', 'phonePrefix' => '243'),
            array('name' => 'Democratic Republic of the Congo', 'countryCode' => 'COD', 'phonePrefix' => '45'),
            array('name' => 'Denmark', 'countryCode' => 'DNK', 'phonePrefix' => '253'),
            array('name' => 'Djibouti', 'countryCode' => 'DJI', 'phonePrefix' => '1-767'),
            array('name' => 'Dominica', 'countryCode' => 'DMA', 'phonePrefix' => '1-809'),
            array('name' => 'Dominican Republic', 'countryCode' => 'DOM', 'phonePrefix' => '1-829'),
            array('name' => 'Dominican Republic', 'countryCode' => 'DOM', 'phonePrefix' => '1-849'),
            array('name' => 'Dominican Republic', 'countryCode' => 'DOM', 'phonePrefix' => '670'),
            array('name' => 'East Timor', 'countryCode' => 'TLS', 'phonePrefix' => '593'),
            array('name' => 'Ecuador', 'countryCode' => 'ECU', 'phonePrefix' => '20'),
            array('name' => 'Egypt', 'countryCode' => 'EGY', 'phonePrefix' => '503'),
            array('name' => 'El Salvador', 'countryCode' => 'SLV', 'phonePrefix' => '240'),
            array('name' => 'Equatorial Guinea', 'countryCode' => 'GNQ', 'phonePrefix' => '291'),
            array('name' => 'Eritrea', 'countryCode' => 'ERI', 'phonePrefix' => '372'),
            array('name' => 'Estonia', 'countryCode' => 'EST', 'phonePrefix' => '251'),
            array('name' => 'Ethiopia', 'countryCode' => 'ETH', 'phonePrefix' => '500'),
            array('name' => 'Falkland Islands', 'countryCode' => 'FLK', 'phonePrefix' => '298'),
            array('name' => 'Faroe Islands', 'countryCode' => 'FRO', 'phonePrefix' => '679'),
            array('name' => 'Fiji', 'countryCode' => 'FJI', 'phonePrefix' => '358'),
            array('name' => 'Finland', 'countryCode' => 'FIN', 'phonePrefix' => '33'),
            array('name' => 'France', 'countryCode' => 'FRA', 'phonePrefix' => '689'),
            array('name' => 'French Polynesia', 'countryCode' => 'PYF', 'phonePrefix' => '241'),
            array('name' => 'Gabon', 'countryCode' => 'GAB', 'phonePrefix' => '220'),
            array('name' => 'Gambia', 'countryCode' => 'GMB', 'phonePrefix' => '995'),
            array('name' => 'Georgia', 'countryCode' => 'GEO', 'phonePrefix' => '49'),
            array('name' => 'Germany', 'countryCode' => 'DEU', 'phonePrefix' => '233'),
            array('name' => 'Ghana', 'countryCode' => 'GHA', 'phonePrefix' => '350'),
            array('name' => 'Gibraltar', 'countryCode' => 'GIB', 'phonePrefix' => '30'),
            array('name' => 'Greece', 'countryCode' => 'GRC', 'phonePrefix' => '299'),
            array('name' => 'Greenland', 'countryCode' => 'GRL', 'phonePrefix' => '1-473'),
            array('name' => 'Grenada', 'countryCode' => 'GRD', 'phonePrefix' => '1-671'),
            array('name' => 'Guam', 'countryCode' => 'GUM', 'phonePrefix' => '502'),
            array('name' => 'Guatemala', 'countryCode' => 'GTM', 'phonePrefix' => '44-1481'),
            array('name' => 'Guernsey', 'countryCode' => 'GGY', 'phonePrefix' => '224'),
            array('name' => 'Guinea', 'countryCode' => 'GIN', 'phonePrefix' => '245'),
            array('name' => 'Guinea-Bissau', 'countryCode' => 'GNB', 'phonePrefix' => '592'),
            array('name' => 'Guyana', 'countryCode' => 'GUY', 'phonePrefix' => '509'),
            array('name' => 'Haiti', 'countryCode' => 'HTI', 'phonePrefix' => '504'),
            array('name' => 'Honduras', 'countryCode' => 'HND', 'phonePrefix' => '852'),
            array('name' => 'Hong Kong', 'countryCode' => 'HKG', 'phonePrefix' => '36'),
            array('name' => 'Magyarország', 'countryCode' => 'HUN', 'phonePrefix' => '354'),
            array('name' => 'Iceland', 'countryCode' => 'ISL', 'phonePrefix' => '91'),
            array('name' => 'India', 'countryCode' => 'IND', 'phonePrefix' => '62'),
            array('name' => 'Indonesia', 'countryCode' => 'IDN', 'phonePrefix' => '98'),
            array('name' => 'Iran', 'countryCode' => 'IRN', 'phonePrefix' => '964'),
            array('name' => 'Iraq', 'countryCode' => 'IRQ', 'phonePrefix' => '353'),
            array('name' => 'Ireland', 'countryCode' => 'IRL', 'phonePrefix' => '44-1624'),
            array('name' => 'Isle of Man', 'countryCode' => 'IMN', 'phonePrefix' => '972'),
            array('name' => 'Israel', 'countryCode' => 'ISR', 'phonePrefix' => '39'),
            array('name' => 'Italy', 'countryCode' => 'ITA', 'phonePrefix' => '225'),
            array('name' => 'Ivory Coast', 'countryCode' => 'CIV', 'phonePrefix' => '1-876'),
            array('name' => 'Jamaica', 'countryCode' => 'JAM', 'phonePrefix' => '81'),
            array('name' => 'Japan', 'countryCode' => 'JPN', 'phonePrefix' => '44-1534'),
            array('name' => 'Jersey', 'countryCode' => 'JEY', 'phonePrefix' => '962'),
            array('name' => 'Jordan', 'countryCode' => 'JOR', 'phonePrefix' => '7'),
            array('name' => 'Kazakhstan', 'countryCode' => 'KAZ', 'phonePrefix' => '254'),
            array('name' => 'Kenya', 'countryCode' => 'KEN', 'phonePrefix' => '686'),
            array('name' => 'Kiribati', 'countryCode' => 'KIR', 'phonePrefix' => '383'),
            array('name' => 'Kosovo', 'countryCode' => 'XKX', 'phonePrefix' => '965'),
            array('name' => 'Kuwait', 'countryCode' => 'KWT', 'phonePrefix' => '996'),
            array('name' => 'Kyrgyzstan', 'countryCode' => 'KGZ', 'phonePrefix' => '856'),
            array('name' => 'Laos', 'countryCode' => 'LAO', 'phonePrefix' => '371'),
            array('name' => 'Latvia', 'countryCode' => 'LVA', 'phonePrefix' => '961'),
            array('name' => 'Lebanon', 'countryCode' => 'LBN', 'phonePrefix' => '266'),
            array('name' => 'Lesotho', 'countryCode' => 'LSO', 'phonePrefix' => '231'),
            array('name' => 'Liberia', 'countryCode' => 'LBR', 'phonePrefix' => '218'),
            array('name' => 'Libya', 'countryCode' => 'LBY', 'phonePrefix' => '423'),
            array('name' => 'Liechtenstein', 'countryCode' => 'LIE', 'phonePrefix' => '370'),
            array('name' => 'Lithuania', 'countryCode' => 'LTU', 'phonePrefix' => '352'),
            array('name' => 'Luxembourg', 'countryCode' => 'LUX', 'phonePrefix' => '853'),
            array('name' => 'Macao', 'countryCode' => 'MAC', 'phonePrefix' => '389'),
            array('name' => 'Macedonia', 'countryCode' => 'MKD', 'phonePrefix' => '261'),
            array('name' => 'Madagascar', 'countryCode' => 'MDG', 'phonePrefix' => '265'),
            array('name' => 'Malawi', 'countryCode' => 'MWI', 'phonePrefix' => '60'),
            array('name' => 'Malaysia', 'countryCode' => 'MYS', 'phonePrefix' => '960'),
            array('name' => 'Maldives', 'countryCode' => 'MDV', 'phonePrefix' => '223'),
            array('name' => 'Mali', 'countryCode' => 'MLI', 'phonePrefix' => '356'),
            array('name' => 'Malta', 'countryCode' => 'MLT', 'phonePrefix' => '692'),
            array('name' => 'Marshall Islands', 'countryCode' => 'MHL', 'phonePrefix' => '222'),
            array('name' => 'Mauritania', 'countryCode' => 'MRT', 'phonePrefix' => '230'),
            array('name' => 'Mauritius', 'countryCode' => 'MUS', 'phonePrefix' => '262'),
            array('name' => 'Mayotte', 'countryCode' => 'MYT', 'phonePrefix' => '52'),
            array('name' => 'Mexico', 'countryCode' => 'MEX', 'phonePrefix' => '691'),
            array('name' => 'Micronesia', 'countryCode' => 'FSM', 'phonePrefix' => '373'),
            array('name' => 'Moldova', 'countryCode' => 'MDA', 'phonePrefix' => '377'),
            array('name' => 'Monaco', 'countryCode' => 'MCO', 'phonePrefix' => '976'),
            array('name' => 'Mongolia', 'countryCode' => 'MNG', 'phonePrefix' => '382'),
            array('name' => 'Montenegro', 'countryCode' => 'MNE', 'phonePrefix' => '1-664'),
            array('name' => 'Montserrat', 'countryCode' => 'MSR', 'phonePrefix' => '212'),
            array('name' => 'Morocco', 'countryCode' => 'MAR', 'phonePrefix' => '258'),
            array('name' => 'Mozambique', 'countryCode' => 'MOZ', 'phonePrefix' => '95'),
            array('name' => 'Myanmar', 'countryCode' => 'MMR', 'phonePrefix' => '264'),
            array('name' => 'Namibia', 'countryCode' => 'NAM', 'phonePrefix' => '674'),
            array('name' => 'Nauru', 'countryCode' => 'NRU', 'phonePrefix' => '977'),
            array('name' => 'Nepal', 'countryCode' => 'NPL', 'phonePrefix' => '31'),
            array('name' => 'Netherlands', 'countryCode' => 'NLD', 'phonePrefix' => '599'),
            array('name' => 'Netherlands Antilles', 'countryCode' => 'ANT', 'phonePrefix' => '687'),
            array('name' => 'New Caledonia', 'countryCode' => 'NCL', 'phonePrefix' => '64'),
            array('name' => 'New Zealand', 'countryCode' => 'NZL', 'phonePrefix' => '505'),
            array('name' => 'Nicaragua', 'countryCode' => 'NIC', 'phonePrefix' => '227'),
            array('name' => 'Niger', 'countryCode' => 'NER', 'phonePrefix' => '234'),
            array('name' => 'Nigeria', 'countryCode' => 'NGA', 'phonePrefix' => '683'),
            array('name' => 'Niue', 'countryCode' => 'NIU', 'phonePrefix' => '850'),
            array('name' => 'North Korea', 'countryCode' => 'PRK', 'phonePrefix' => '1-670'),
            array('name' => 'Northern Mariana Islands', 'countryCode' => 'MNP', 'phonePrefix' => '47'),
            array('name' => 'Norway', 'countryCode' => 'NOR', 'phonePrefix' => '968'),
            array('name' => 'Oman', 'countryCode' => 'OMN', 'phonePrefix' => '92'),
            array('name' => 'Pakistan', 'countryCode' => 'PAK', 'phonePrefix' => '680'),
            array('name' => 'Palau', 'countryCode' => 'PLW', 'phonePrefix' => '970'),
            array('name' => 'Palestine', 'countryCode' => 'PSE', 'phonePrefix' => '507'),
            array('name' => 'Panama', 'countryCode' => 'PAN', 'phonePrefix' => '675'),
            array('name' => 'Papua New Guinea', 'countryCode' => 'PNG', 'phonePrefix' => '595'),
            array('name' => 'Paraguay', 'countryCode' => 'PRY', 'phonePrefix' => '51'),
            array('name' => 'Peru', 'countryCode' => 'PER', 'phonePrefix' => '63'),
            array('name' => 'Philippines', 'countryCode' => 'PHL', 'phonePrefix' => '64'),
            array('name' => 'Pitcairn', 'countryCode' => 'PCN', 'phonePrefix' => '48'),
            array('name' => 'Poland', 'countryCode' => 'POL', 'phonePrefix' => '351'),
            array('name' => 'Portugal', 'countryCode' => 'PRT', 'phonePrefix' => '1-787'),
            array('name' => 'Puerto Rico', 'countryCode' => 'PRI', 'phonePrefix' => '1-939'),
            array('name' => 'Puerto Rico', 'countryCode' => 'PRI', 'phonePrefix' => '974'),
            array('name' => 'Qatar', 'countryCode' => 'QAT', 'phonePrefix' => '242'),
            array('name' => 'Republic of the Congo', 'countryCode' => 'COG', 'phonePrefix' => '262'),
            array('name' => 'Reunion', 'countryCode' => 'REU', 'phonePrefix' => '40'),
            array('name' => 'Romania', 'countryCode' => 'ROU', 'phonePrefix' => '7'),
            array('name' => 'Russia', 'countryCode' => 'RUS', 'phonePrefix' => '250'),
            array('name' => 'Rwanda', 'countryCode' => 'RWA', 'phonePrefix' => '590'),
            array('name' => 'Saint Barthelemy', 'countryCode' => 'BLM', 'phonePrefix' => '290'),
            array('name' => 'Saint Helena', 'countryCode' => 'SHN', 'phonePrefix' => '1-869'),
            array('name' => 'Saint Kitts and Nevis', 'countryCode' => 'KNA', 'phonePrefix' => '1-758'),
            array('name' => 'Saint Lucia', 'countryCode' => 'LCA', 'phonePrefix' => '590'),
            array('name' => 'Saint Martin', 'countryCode' => 'MAF', 'phonePrefix' => '508'),
            array('name' => 'Saint Pierre and Miquelon', 'countryCode' => 'SPM', 'phonePrefix' => '1-784'),
            array('name' => 'Saint Vincent and the Grenadines', 'countryCode' => 'VCT', 'phonePrefix' => '685'),
            array('name' => 'Samoa', 'countryCode' => 'WSM', 'phonePrefix' => '378'),
            array('name' => 'San Marino', 'countryCode' => 'SMR', 'phonePrefix' => '239'),
            array('name' => 'Sao Tome and Principe', 'countryCode' => 'STP', 'phonePrefix' => '966'),
            array('name' => 'Saudi Arabia', 'countryCode' => 'SAU', 'phonePrefix' => '221'),
            array('name' => 'Senegal', 'countryCode' => 'SEN', 'phonePrefix' => '381'),
            array('name' => 'Serbia', 'countryCode' => 'SRB', 'phonePrefix' => '248'),
            array('name' => 'Seychelles', 'countryCode' => 'SYC', 'phonePrefix' => '232'),
            array('name' => 'Sierra Leone', 'countryCode' => 'SLE', 'phonePrefix' => '65'),
            array('name' => 'Singapore', 'countryCode' => 'SGP', 'phonePrefix' => '1-721'),
            array('name' => 'Sint Maarten', 'countryCode' => 'SXM', 'phonePrefix' => '421'),
            array('name' => 'Slovakia', 'countryCode' => 'SVK', 'phonePrefix' => '386'),
            array('name' => 'Slovenia', 'countryCode' => 'SVN', 'phonePrefix' => '677'),
            array('name' => 'Solomon Islands', 'countryCode' => 'SLB', 'phonePrefix' => '252'),
            array('name' => 'Somalia', 'countryCode' => 'SOM', 'phonePrefix' => '27'),
            array('name' => 'South Africa', 'countryCode' => 'ZAF', 'phonePrefix' => '82'),
            array('name' => 'South Korea', 'countryCode' => 'KOR', 'phonePrefix' => '211'),
            array('name' => 'South Sudan', 'countryCode' => 'SSD', 'phonePrefix' => '34'),
            array('name' => 'Spain', 'countryCode' => 'ESP', 'phonePrefix' => '94'),
            array('name' => 'Sri Lanka', 'countryCode' => 'LKA', 'phonePrefix' => '249'),
            array('name' => 'Sudan', 'countryCode' => 'SDN', 'phonePrefix' => '597'),
            array('name' => 'Suriname', 'countryCode' => 'SUR', 'phonePrefix' => '47'),
            array('name' => 'Svalbard and Jan Mayen', 'countryCode' => 'SJM', 'phonePrefix' => '268'),
            array('name' => 'Swaziland', 'countryCode' => 'SWZ', 'phonePrefix' => '46'),
            array('name' => 'Sweden', 'countryCode' => 'SWE', 'phonePrefix' => '41'),
            array('name' => 'Switzerland', 'countryCode' => 'CHE', 'phonePrefix' => '963'),
            array('name' => 'Syria', 'countryCode' => 'SYR', 'phonePrefix' => '886'),
            array('name' => 'Taiwan', 'countryCode' => 'TWN', 'phonePrefix' => '992'),
            array('name' => 'Tajikistan', 'countryCode' => 'TJK', 'phonePrefix' => '255'),
            array('name' => 'Tanzania', 'countryCode' => 'TZA', 'phonePrefix' => '66'),
            array('name' => 'Thailand', 'countryCode' => 'THA', 'phonePrefix' => '228'),
            array('name' => 'Togo', 'countryCode' => 'TGO', 'phonePrefix' => '690'),
            array('name' => 'Tokelau', 'countryCode' => 'TKL', 'phonePrefix' => '676'),
            array('name' => 'Tonga', 'countryCode' => 'TON', 'phonePrefix' => '1-868'),
            array('name' => 'Trinidad and Tobago', 'countryCode' => 'TTO', 'phonePrefix' => '216'),
            array('name' => 'Tunisia', 'countryCode' => 'TUN', 'phonePrefix' => '90'),
            array('name' => 'Turkey', 'countryCode' => 'TUR', 'phonePrefix' => '993'),
            array('name' => 'Turkmenistan', 'countryCode' => 'TKM', 'phonePrefix' => '1-649'),
            array('name' => 'Turks and Caicos Islands', 'countryCode' => 'TCA', 'phonePrefix' => '688'),
            array('name' => 'Tuvalu', 'countryCode' => 'TUV', 'phonePrefix' => '1-340'),
            array('name' => 'U.S. Virgin Islands', 'countryCode' => 'VIR', 'phonePrefix' => '256'),
            array('name' => 'Uganda', 'countryCode' => 'UGA', 'phonePrefix' => '380'),
            array('name' => 'Ukraine', 'countryCode' => 'UKR', 'phonePrefix' => '971'),
            array('name' => 'United Arab Emirates', 'countryCode' => 'ARE', 'phonePrefix' => '44'),
            array('name' => 'United Kingdom', 'countryCode' => 'GBR', 'phonePrefix' => '1'),
            array('name' => 'United States', 'countryCode' => 'USA', 'phonePrefix' => '598'),
            array('name' => 'Uruguay', 'countryCode' => 'URY', 'phonePrefix' => '998'),
            array('name' => 'Uzbekistan', 'countryCode' => 'UZB', 'phonePrefix' => '678'),
            array('name' => 'Vanuatu', 'countryCode' => 'VUT', 'phonePrefix' => '379'),
            array('name' => 'Vatican', 'countryCode' => 'VAT', 'phonePrefix' => '58'),
            array('name' => 'Venezuela', 'countryCode' => 'VEN', 'phonePrefix' => '84'),
            array('name' => 'Vietnam', 'countryCode' => 'VNM', 'phonePrefix' => '681'),
            array('name' => 'Wallis and Futuna', 'countryCode' => 'WLF', 'phonePrefix' => '212'),
            array('name' => 'Western Sahara', 'countryCode' => 'ESH', 'phonePrefix' => '967'),
            array('name' => 'Yemen', 'countryCode' => 'YEM', 'phonePrefix' => '260'),
            array('name' => 'Zambia', 'countryCode' => 'ZMB', 'phonePrefix' => '263'),
            array('name' => 'Zimbabwe', 'countryCode' => 'ZWE', 'phonePrefix' => '')
        );
        DB::table('countries')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
    }
}
