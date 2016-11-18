<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * --------------------------------------------------------------
     * |            CompanyType - Cégtípus
     * |    [name]  Cég típus megnevezése
     * |        A tábla a company és vendor táblával van össze köttetésbeF
     * |        a companyType_id és a vendorType_id -n keresztül
     * |        ez határozza meg a cég és beszásszító cég típusát
     * --------------------------------------------------------------
     */
    public function up()
    {
        Schema::create('companyType', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        $data = array(
            array('name'=>'Korlátolt felelősségű társaság'),
            array('name'=>'Részvénytársaság'),
            array('name'=>'Közkereseti társaság'),
            array('name'=>'Betéti társaság'),
            array('name'=>'Szociális szövetkezet'),
            array('name'=>'Takarék- és hitelszövetkezet'),
            array('name'=>'Iskola szövetkezet'),
            array('name'=>'Agrárgazdasági szövetkezet'),
            array('name'=>'Biztosító szövetkezet'),
            array('name'=>'Foglalkoztatási szövetkezet'),
            array('name'=>'Egyéb szövetkezet'),
            array('name'=>'Ügyvédi iroda'),
            array('name'=>'Szabadalmi ügyvivő iroda'),
            array('name'=>'Vízitársulat'),
            array('name'=>'Erdőbirtokossági társulat'),
            array('name'=>'Végrehajtó iroda'),
            array('name'=>'Közjegyzői iroda'),
            array('name'=>'Európai részvénytársaság (SE)'),
            array('name'=>'Európai szövetkezet (SCE)'),
            array('name'=>'Magyarországi székhelyű európai gazdasági egyesülés'),
            array('name'=>'Európai területi együttműködési csoportosulás (EGTC)'),
            array('name'=>'Víziközmű-társulat'),
            array('name'=>'Külföldi vállalkozás magyarországi fióktelepe'),
            array('name'=>'Külföldi székhelyű európai gazdasági egyesülés magyarországi telephelye'),
            array('name'=>'Egyéni cég'),
            array('name'=>'Egyéni vállalkozó'),
            array('name'=>'Egyéb önálló vállalkozó'),
            array('name'=>'Adószámmal rendelkező magánszemély'),
            array('name'=>'Központi költségvetési irányító szerv'),
            array('name'=>'Központi költségvetési szerv'),
            array('name'=>'Helyi önkormányzat'),
            array('name'=>'Helyi önkormányzati költségvetési szerv'),
            array('name'=>'Önkormányzati hivatal (költségvetési szerv)'),
            array('name'=>'Helyi önkormányzatok társulása'),
            array('name'=>'Területfejlesztési önkormányzati társulás'),
            array('name'=>'Köztestületi költségvetési irányító szerv'),
            array('name'=>'Köztestületi költségvetési szerv'),
            array('name'=>'Országos nemzetiségi önkormányzat'),
            array('name'=>'Országos nemzetiségi önkormányzati költségvetési szerv'),
            array('name'=>'Országos nemzetiségi önkormányzatok társulása'),
            array('name'=>'Térségi fejlesztési tanács'),
            array('name'=>'Helyi nemzetiségi önkormányzat'),
            array('name'=>'Helyi nemzetiségi önkormányzati költségvetési szerv'),
            array('name'=>'Helyi nemzetiségi önkormányzatok társulása'),
            array('name'=>'Költségvetési rend szerint gazdálkodó, központi költségvetési körbe tartozó szerv'),
            array('name'=>'Költségvetési rend szerint gazdálkodó, önkormányzati költségvetési körbe tartozó szerv'),
            array('name'=>'Állami felsőoktatási intézmény által fenntartott közoktatási, köznevelési intézmény'),
            array('name'=>'Központi kezelésű előirányzat'),
            array('name'=>'Fejezeti kezelésű előirányzat'),
            array('name'=>'Elkülönített állami pénzalap'),
            array('name'=>'Nyugdíjbiztosítási alap'),
            array('name'=>'Egészségbiztosítási alap'),
            array('name'=>'Nemzeti együttműködési Alap'),
            array('name'=>'Járási hivatalok'),
            array('name'=>'Párt'),
            array('name'=>'Szakszervezet'),
            array('name'=>'Egyéb munkavállalói érdekképviselet'),
            array('name'=>'Munkáltatói, tulajdonosi érdekképviselet'),
            array('name'=>'Országos sportági szakszövetség'),
            array('name'=>'Egyéb sportszövetség'),
            array('name'=>'Egyéb szövetség'),
            array('name'=>'Egyesület jogi személyiséggel rendelkező szervezeti egysége'),
            array('name'=>'Sportegyesület'),
            array('name'=>'Kölcsönös biztosító egyesület'),
            array('name'=>'Vallási tevékenységet végzŐ szervezet'),
            array('name'=>'Polgárőr egyesület'),
            array('name'=>'Nemzetiségi egyesület'),
            array('name'=>'Egyéb egyesület'),
            array('name'=>'Kamara'),
            array('name'=>'Egyéb köztestület'),
            array('name'=>'Bevett egyház'),
            array('name'=>'Elsődlegesen közfeladatot ellátó belső egyházi jogi személy'),
            array('name'=>'Elsődlegesen vallási tevékenységet végző belső egyházi jogi személy'),
            array('name'=>'Egyházi szervezet technikai kód'),
            array('name'=>'Közalapítvány'),
            array('name'=>'Közalapítvány önálló intézménye'),
            array('name'=>'Egyéb alapítvány önálló intézménye'),
            array('name'=>'Pártalapítvány'),
            array('name'=>'Alapítvány jogi személyiséggel rendelkező szervezeti egysége'),
            array('name'=>'Egyéb alapítvány'),
            array('name'=>'Nonprofit korlátolt felelősségű társaság'),
            array('name'=>'Nonprofit részvénytársaság'),
            array('name'=>'Európai kutatási infrastruktúráért felelős konzorcium (ERIC)'),
            array('name'=>'Nonprofit közkereseti társaság'),
            array('name'=>'Nonprofit betéti társaság'),
            array('name'=>'Önkéntes kölcsönös biztosító pénztár'),
            array('name'=>'Magánnyugdíjpénztár'),
            array('name'=>'Vegyes nyugdíjpénztár'),
            array('name'=>'Egyesülés'),
            array('name'=>'Lakásszövetkezet'),
            array('name'=>'Egyéb, jogi személyiségű nonprofit szervezet'),
            array('name'=>'Külföldiek magyarországi közvetlen kereskedelmi képviselete'),
            array('name'=>'Társasház'),
            array('name'=>'Építőközösség'),
            array('name'=>'Egyéb, jogi személyiség nélküli nonprofit szervezet'),
            array('name'=>'Állami vállalat'),
            array('name'=>'Leányvállalat'),
            array('name'=>'Gazdasági munkaközösség'),
            array('name'=>'Közös vállalat'),
            array('name'=>'Polgári jogi társaság'),
            array('name'=>'Művészeti alkotóközösség'),
            array('name'=>'Közhasznú társaság'),
            array('name'=>'Egyes jogi személyek vállalata'),
            array('name'=>'Egyéb, máshova nem sorolt vállalat'),
            array('name'=>'Egyéb megszűnt gazdálkodási forma'),
            array('name'=>'Egyéni (nem piaci) gazdasági tevékenység'),
            array('name'=>'Befektetési alap'),
            array('name'=>'Országos betétbiztosítási alap'),
            array('name'=>'Pénztárak garanciaalapja'),
            array('name'=>'Egyéb alap'),
            array('name'=>'Munkavállalói résztulajdonosi program szervezete'),
            array('name'=>'Egyéb adóalany'),
            array('name'=>'Adószámmal rendelkező külföldi vállalkozás'),
            array('name'=>'Külföldi diplomáciai, konzuli testület'),
            array('name'=>'Egyéb területen kívüli szervezet'),
            array('name'=>'Háztartás')
        );

        DB::table('companyType')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companyType');
    }
}
