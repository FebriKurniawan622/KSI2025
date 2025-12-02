<?php
use PHPUnit\Framework\TestCase;

class ContohTest extends TestCase
{
    public function testBenar()
    {
        // Tes sederhana: Memastikan 1 + 1 hasilnya 2
        $this->assertEquals(2, 1 + 1);
    }

    public function testKata()
    {
        // Tes sederhana: Memastikan ada kata "Unit" di dalam kalimat
        $kalimat = "Belajar Unit Test";
        $this->assertStringContainsString("Unit", $kalimat);
    }
}