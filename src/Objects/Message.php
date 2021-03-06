<?php

namespace Telegram\Bot\Objects;

/**
 * Class Message.
 *
 *
 * @method int              getMessageId()              Unique message identifier.
 * @method User             getFrom()                   (Optional). Sender, can be empty for messages sent to channels.
 * @method int              getDate()                   Date the message was sent in Unix time.
 * @method Chat             getChat()                   Conversation the message belongs to.
 * @method User             getForwardFrom()            (Optional). For forwarded messages, sender of the original message.
 * @method int              getForwardFromMessageId()   (Optional). For messages forwarded from channels, identifier of the original message in the channel
 * @method string           getForwardSignature()   (Optional). For messages forwarded from channels, signature of the post author if present
 * @method string           getForwardSenderName()   (Optional). Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
 * @method int              getForwardDate()            (Optional). For forwarded messages, date the original message was sent in Unix time.
 * @method Message          getReplyToMessage()         (Optional). For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @method string           getText()                   (Optional). For text messages, the actual UTF-8 text of the message.
 * @method Audio            getAudio()                  (Optional). Message is an audio file, information about the file.
 * @method Document         getDocument()               (Optional). Message is a general file, information about the file.
 * @method PhotoSize[]      getPhoto()                  (Optional). Message is a photo, available sizes of the photo.
 * @method Sticker          getSticker()                (Optional). Message is a sticker, information about the sticker.
 * @method Video            getVideo()                  (Optional). Message is a video, information about the video.
 * @method Voice            getVoice()                  (Optional). Message is a voice message, information about the file.
 * @method string           getCaption()                (Optional). Caption for the photo or video contact.
 * @method Contact          getContact()                (Optional). Message is a shared contact, information about the contact.
 * @method Location         getLocation()               (Optional). Message is a shared location, information about the location.
 * @method User[]             getNewChatMembers()     (Optional). A new member was added to the group, information about them (this member may be the bot itself).
 * @method User             getLeftChatMember()    (Optional). A member was removed from the group, information about them (this member may be the bot itself).
 * @method string           getNewChatTitle()           (Optional). A chat title was changed to this value.
 * @method PhotoSize[]      getNewChatPhoto()           (Optional). A chat photo was change to this value.
 * @method bool             getDeleteChatPhoto()        (Optional). Service message: the chat photo was deleted.
 * @method bool             getGroupChatCreated()       (Optional). Service message: the group has been created.
 * @method bool             getSupergroupChatCreated()  (Optional). Service message: the super group has been created.
 * @method bool             getChannelChatCreated()     (Optional). Service message: the channel has been created.
 * @method int              getMigrateToChatId()        (Optional). The group has been migrated to a supergroup with the specified identifier, not exceeding 1e13 by absolute value.
 * @method int              getMigrateFromChatId()      (Optional). The supergroup has been migrated from a group with the specified identifier, not exceeding 1e13 by absolute value.
 * @method MessageEntity[]  getEntities()
 */
class Message extends BaseObject
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return [
            'chat'                          => Chat::class,
            'from'                          => User::class,
            'forward_from'                  => User::class,
            'forward_from_chat'             => Chat::class,
            'reply_to_message'              => self::class,
            'entities'                      => MessageEntity::class,
            'caption_entities'              => MessageEntity::class,
            'audio'                         => Audio::class,
            'document'                      => Document::class,
            //animation
            //game
            'photo'                 => PhotoSize::class,
            'sticker'               => Sticker::class,
            'video'                 => Video::class,
            'voice'                 => Voice::class,
            //video_note
            'contact'               => Contact::class,
            'location'              => Location::class,
            //venue
            'poll'                  => Poll::class,
            'new_chat_members'      => User::class,
            'left_chat_member'      => User::class,
            'new_chat_photo'        => PhotoSize::class,
            'pinned_message'        => self::class,
            //invoice
            //successful_payment
            //passport_data
        ];
    }
}
