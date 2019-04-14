<?php

namespace Telegram\Bot\Objects;

/**
 * Class Update.
 *
 *
 * @method int      getUpdateId()               The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially.
 * @method Message  getMessage()                (Optional). New incoming message of any kind - text, photo, sticker, etc.
 * @method CallbackQuery getCallbackQuery()     (Optional). Callback query from a callback button in an inline keyboard
 * @method InlineQuery getInlineQuery()         (Optional). Inline query
 */
class Update extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [
            'message'        => Message::class,
            'callback_query' => CallbackQuery::class,
            'inline_query'   => InlineQuery::class,
        ];
    }

    /**
     * Get recent message.
     *
     * @return Update
     */
    public function recentMessage()
    {
        return new static($this->last());
    }
}
