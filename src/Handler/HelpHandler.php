<?php

namespace CliFyi\Handler;

use CliFyi\Value\SearchTerm;

class HelpHandler extends AbstractHandler
{
    const KEYWORD = 'help';

    /**
     * @return string
     */
    public function getHandlerName(): string
    {
        return 'Help';
    }

    /**
     * @param SearchTerm $searchQuery
     *
     * @return bool
     */
    public static function isHandlerEligible(SearchTerm $searchQuery): bool
    {
        return $searchQuery->toLowerCaseString() === self::KEYWORD;
    }

    /**
     * @param SearchTerm $searchTerm
     *
     * @return array
     */
    public function processSearchTerm(SearchTerm $searchTerm): array
    {
        return [
            'IP Address Query' =>  [
                'example' => 'https://cli.fyi/8.8.8.8'
            ],
            'Media/Url Query' =>  [
                'example' => 'https://cli.fyi/https://google.com'
            ],
            'Email Address Query' =>  [
                'example' => 'https://cli.fyi/test@10minutemail.com'
            ],
            'Client (you) Query' =>  [
                'example' => 'https://cli.fyi/me'
            ],
            'Domain DNS & Whois Query' =>  [
                'example' => 'https://cli.fyi/google.com'
            ],
            'Crypto Prices Query' =>  [
                'example' => 'https://cli.fyi/btc'
            ],
            'Date/Time Query' =>  [
                'example' => 'https://cli.fyi/time'
            ],
            'Country Query' =>  [
                'example' => 'https://cli.fyi/united-states'
            ],
            'Programming Language Query' =>  [
                'example' => 'https://cli.fyi/java'
            ],
            'Emoji Query' =>  [
                'example' => 'https://cli.fyi/emoji'
            ]
        ];
    }
}
