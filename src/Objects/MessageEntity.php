<?php

namespace Telegram\Bot\Objects;

/**
 * Class MessageEntity.
 *
 * @method string       getType()
 * @method integer      getOffset()
 * @method integer      getLength()
 * @method string       getUrl()
 * @method User         getUser()
 */
class MessageEntity extends BaseObject
{
    /**
     * @inheritdoc
     */
    public function relations()
    {
        return [
            'user' => User::class
        ];
    }
}