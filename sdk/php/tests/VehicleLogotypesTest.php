<?php

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Collection;
use AvtoDev\VehicleLogotypes\VehicleLogotypes;

class VehicleLogotypesTest extends TestCase
{
    /**
     * @var VehicleLogotypes
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->instance = VehicleLogotypes::create();
    }

    /**
     * Constructor test.
     *
     * @return void
     */
    public function testConstructor()
    {
        $instance = VehicleLogotypes::create();

        $this->assertInstanceOf(Collection::class, $instance);
        $this->assertGreaterThanOrEqual(332, $instance->count());
    }

    /**
     * Test content structure.
     *
     * @return void
     */
    public function testStructure()
    {
        foreach ($this->instance as $key => $item) {
            $this->assertInternalType('string', $key);
            $this->assertNotEmpty($key);
            $this->assertRegExp('~[a-z0-9\-]+~', $key);

            $this->assertInternalType('string', $item['name']);
            $this->assertNotEmpty($item['name']);
            $this->assertRegExp('~[a-zA-Z0-9\-\ ]+~', $item['name']);

            foreach (['name', 'logotype', 'alternatives'] as $expected_key) {
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
    public function testSimpleUsage()
    {
        $this->assertEquals('Opel', $this->instance->get('opel')['name']);

        $this->assertGreaterThanOrEqual(2, $this->instance->filter(function ($item) {
            return mb_strpos(mb_strtolower($item['name']), 'bmw') !== false;
        })->count());
    }

    /**
     * Test image block structure.
     *
     * @param array $data
     */
    protected function assertImageStructure($data)
    {
        foreach (['uri', 'width', 'height', 'mime', 'transparent', 'size'] as $expected_key) {
            $this->assertArrayHasKey($expected_key, $data);
        }

        foreach (['uri', 'mime'] as $should_be_string) {
            $this->assertInternalType('string', $data[$should_be_string]);
            $this->assertNotEmpty($data[$should_be_string]);
        }

        foreach (['width', 'height', 'size'] as $should_be_integer) {
            $this->assertInternalType('integer', $data[$should_be_integer]);
            $this->assertGreaterThanOrEqual(1, $data[$should_be_integer]);
        }

        $this->assertInternalType('boolean', $data['transparent']);

        $this->assertIsValidUri($data['uri']);
    }

    /**
     * Assert that passed string is valid URI.
     *
     * @param string $uri
     */
    protected function assertIsValidUri($uri)
    {
        $this->assertNotFalse(filter_var($uri, FILTER_VALIDATE_URL));
        $this->assertRegExp('~https?:\/\/[a-zA-Z0-9\-\.]+\/.+~', $uri);
    }
}
