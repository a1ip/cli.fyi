<?php

namespace Test\Handler;

use CliFyi\Handler\ProgrammingLanguageHandler;
use CliFyi\Value\SearchTerm;

class ProgrammingLanguageHandlerTest extends BaseHandlerTestCase
{
    /** @var ProgrammingLanguageHandler */
    private $programmingLanguageHandler;

    protected function setUp()
    {
        parent::setUp();

        $this->programmingLanguageHandler = new ProgrammingLanguageHandler($this->cache);
    }

    public function testGetHandlerName()
    {
        $this->assertSame('Programming Language Links', $this->programmingLanguageHandler->getHandlerName());
    }

    public function testIsHandlerEligibleForValidKeywords()
    {
        foreach (['PhP', 'php', 'java', 'javascript', 'JAVAscRipt'] as $keyword) {
            $this->assertTrue(ProgrammingLanguageHandler::ishandlerEligible((new SearchTerm($keyword))));
        }
    }

    public function testIsHandlerEligibleForInvalidKeywords()
    {
        foreach (['not', 'valid', 'keywords'] as $keyword) {
            $this->assertFalse(ProgrammingLanguageHandler::ishandlerEligible((new SearchTerm($keyword))));
        }
    }

    public function testProcessSearchTerm()
    {
        $data = $this->programmingLanguageHandler->processSearchTerm((new SearchTerm('php')));
        $this->assertArrayHasKey('documentation', $data);
    }
}
