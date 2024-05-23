<?php

declare(strict_types = 1);

namespace AvtoDev\VehicleLogotypes\Tests;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Collection;
use AvtoDev\VehicleLogotypes\VehicleLogotypes;

/**
 * @covers \AvtoDev\VehicleLogotypes\VehicleLogotypes
 */
class VehicleLogotypesTest extends TestCase
{
    /**
     * @var VehicleLogotypes
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->instance = VehicleLogotypes::create();
    }

    /**
     * Constructor test.
     *
     * @return void
     */
    public function testConstructor(): void
    {
        $instance = VehicleLogotypes::create();

        $this->assertInstanceOf(Collection::class, $instance);
        $this->assertGreaterThanOrEqual(410, $instance->count());
    }

    /**
     * Test existing items.
     *
     * @return void
     */
    public function testExistingItems(): void
    {
        $exists = '9ff,abadal,abarth,abbott-detroit,abt-sportsline,ac,acura,adler,aixam,alfa-romeo,allard,alpina,' .
                  'alpine,alta,alvis,american-motors,amg,arash,ariel,aro,arrinera,artega,ascari,asia,askam,' .
                  'aston-martin,atalanta-motors,auburn,audi,aurus,austin,austin-healey,autobacs,autobianchi,' .
                  'axon-automotive,bac,baic-motor,bajaj,baltijas-dzips,baojun,barkas,batmobile,baw,bentley,berkeley,' .
                  'berliet,bertone,bharatbenz,bitter,bizzarrini,bmw,bmw-m,bogdan,borgward,bowler,brabus,brammo,' .
                  'brilliance,bristol-cars,brooke-cars,bufori,bugatti,buick,byd,byvin,cadillac,callaway,caparo,' .
                  'carlsson,caterham,chana,changan,changfeng,chaparral,chery,chevrolet,chrysler,cisitalia,citroen,' .
                  'cizeta,cole,corre-la-licorne,corvette,dacia,dadi,daewoo,daf,daihatsu,daimler,dartz,datsun,' .
                  'david-brown,de-tomaso,delage,derways,detroit-electric,devel-sixteen,diatto,dina,dkw,dmc,dodge,' .
                  'dongfeng,doninvest,donkervoort,ds,eagle-automobile,eco-motors,edag,edsel,eicher,elemental,' .
                  'elfin,elva,englon,erf,eterniti,facel-vega,faraday-future,faw,ferrari,fiat,fioravanti,fisker,foden,' .
                  'force-motors,ford,foton,fpv,franklin,freightliner,fso,fuqi,gac,gardner-douglas,gaz,geely,' .
                  'general-motors,genesis,geo,gilbern,gillet,ginetta,gmc,gonow,gordon,great-wall,grinnall-cars,' .
                  'gt-r,gta-motor,gumpert,hafei,haima,hanomag,haval,hawtai,hennessey,hillman,hindustan-motors,hino,' .
                  'hispano-suiza,holden,hommell,honda,horch,hsv,huanghai,hudson,hummer,hupmobile,hyundai,ic-bus,ifa,' .
                  'ika,ikarus,infiniti,innocenti,intermeccanica,international-harvester,international-trucks,invicta,' .
                  'iran-khodro,irizar,isdera,iso,isuzu,iveco,izh,jac-motors,jaguar,jawa,jba-motors,jeep,jensen,' .
                  'jiangling,jinbei,jmc,kaiser,kamaz,karma,kavz,keating-supercars,kenworth,kia,koenigsegg,kraz,ktm,' .
                  'lada,lagonda,lamborghini,lancia,land-rover,landwind,laraki,laz,lexus,leyland,liaz,liebao-motor,' .
                  'lifan,ligier,lincoln,lister-cars,lloyd,lobini,london-ev-company,lotus,lti,luaz,lucid-motors,' .
                  'luxgen,mack,mahindra,man,mansory,marcos,marlin-car,marussia,maruti,maserati,mastretta,matra,' .
                  'maxus,maybach,maz,mazda,mazzanti-automobili,mclaren,melkus,mercedes-benz,mercury,merkur,mg,' .
                  'microcar,mills-extreme-vehicles,minelli,mini,mitsubishi,mitsuoka,mk-sportscars,morgan,morris,' .
                  'moskvitch,mosler,mustang,nash,navistar-international,neoplan,nismo,nissan,noble,oka,oldsmobile,' .
                  'oltcit,opel,osca,paccar,packard,pagani,panhard,panoz,paz,pegaso,perodua,peterbilt,peugeot,pgo,' .
                  'piaggio,pierce-arrow,pininfarina,plymouth,polestar,pontiac,porsche,praga,premier,prodrive,proton,' .
                  'puch,qoros,qvale,radical-sportscars,ram,rambler,ranz,ravon,renault,renault-samsung-motors,' .
                  'rezvani,riley,rimac,rinspeed,roewe,rolls-royce,ronart-cars,rossion,rover,ruf,saab,saic-motor,' .
                  'saipa,saleen,santana,saturn,scania,scion,seat,seaz,setra,shanghai-maple,shelby,shuanghuan,simca,' .
                  'singer,sisu,skoda,smart,smz,soueast,spectre,spirra,spyker,srt,ssangyong,ssc,sterling,steyr,' .
                  'studebaker,subaru,suffolk-sportscars,suzuki,tagaz,talbot,tata,tatra,tauro-sport-auto,tazzari,' .
                  'techart,tesla,think,tianma,tianye,tofas,toyota,toyota-crown,trabant,tramontana,trion,triumph,' .
                  'troller,tvr,uaz,ud-trucks,ultima-sports,ural,vandenbrink,vauxhall,vazinterservice,vector-motors,' .
                  'vencer,venturi,venucia,viper,volkswagen,volvo,vortex,w-motors,wanderer,wartburg,western-star,' .
                  'westfield,wiesmann,willys-knight,willys-overland,wuling,xin-kai,yamal,yo-mobile,yulon,yutong,' .
                  'zarooq-motors,zastava,zaz,zenos-cars,zenvo,zibar,zil,zis,zotye,zx-auto';

        foreach (\explode(',', $exists) as $key) {
            $this->assertArrayHasKey($key, $this->instance->all());
            $this->assertTrue($this->instance->offsetExists($key));
        }
    }

    /**
     * Test content structure.
     *
     * @return void
     */
    public function testStructure(): void
    {
        foreach ($this->instance as $key => $item) {
            $this->assertIsString($key);
            $this->assertNotEmpty($key);
            $this->assertMatchesRegularExpression('~[a-z0-9\-]+~', $key);

            $this->assertIsString($item['name']);
            $this->assertNotEmpty($item['name']);
            $this->assertMatchesRegularExpression('~[a-zA-Z0-9\-\ ]+~', $item['name']);

            foreach (['name', 'code', 'logotype', 'alternatives'] as $expected_key) {
                $this->assertArrayHasKey($expected_key, $item);
            }

            $this->assertImageStructure($item['logotype']);
            foreach ($item['alternatives'] as $alternative) {
                $this->assertImageStructure($alternative);
            }
        }
    }

    /**
     * Simple usage test.
     *
     * @return void
     */
    public function testSimpleUsage(): void
    {
        $this->assertEquals('Opel', $this->instance->get('opel')['name']);

        $this->assertGreaterThanOrEqual(2, $this->instance->filter(function ($item) {
            return \mb_strpos(\mb_strtolower($item['name']), 'bmw') !== false;
        })->count());
    }

    /**
     * Test image block structure.
     *
     * @param array $data
     */
    protected function assertImageStructure($data): void
    {
        foreach (['uri', 'width', 'height', 'mime', 'transparent', 'size'] as $expected_key) {
            $this->assertArrayHasKey($expected_key, $data);
        }

        foreach (['uri', 'mime'] as $should_be_string) {
            $this->assertIsString($data[$should_be_string]);
            $this->assertNotEmpty($data[$should_be_string]);
        }

        foreach (['width', 'height', 'size'] as $should_be_integer) {
            $this->assertIsInt($data[$should_be_integer]);
            $this->assertGreaterThanOrEqual(1, $data[$should_be_integer]);
        }

        $this->assertIsBool($data['transparent']);

        $this->assertIsValidUri($data['uri']);
    }

    /**
     * Assert that passed string is valid URI.
     *
     * @param string $uri
     */
    protected function assertIsValidUri($uri): void
    {
        $this->assertNotFalse(\filter_var($uri, \FILTER_VALIDATE_URL));
        $this->assertMatchesRegularExpression('~https?:\/\/[a-zA-Z0-9\-\.]+\/.+~', $uri);
    }
}
