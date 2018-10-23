<?php

namespace Telegram\Bot\Objects;

/**
 * Class InlineQuery.
 *
 * @method User     getFrom()           Sender
 * @method Location  getLocation()        (Optional). Message with the callback button that originated the query.
 * @method string   getQuery()
 * @method string   getOffset()
 * @method string   getId()
 */
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