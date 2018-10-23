<?php

namespace Telegram\Bot\Objects;

class InlineQuery extends BaseObject
{
    /**
     * @inheritdoc
     */
    public function relations()
    {
        return [
            'from' => User::class,
            'location' => Location::class,
        ];
    }
}