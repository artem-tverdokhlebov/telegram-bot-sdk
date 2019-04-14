<?php

namespace Telegram\Bot\Objects;

/**
 * Class Poll.
 *
 *
 * @method string       getId()     Unique poll identifier
 * @method string       getQuestion()   Poll question, 1-255 characters
 * @method bool     getIsClosed()   True, if the poll is closed
 * @method PollOption[]     getOptions()    List of poll options
 */
class Poll extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [
            'options' => PollOption::class,
        ];
    }
}
