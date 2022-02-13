<?php

namespace GDebrauwer\Hateoas\Tests\App\Hateoas;

use GDebrauwer\Hateoas\Tests\App\Models\Message;

class MessageHateoasReturningNoLinks
{
    /**
     * Get the HATEOAS link to view the message.
     *
     * @param \App\Message $message
     *
     * @return \GDebrauwer\Hateoas\Link|null
     */
    public function self(Message $message)
    {
    }

    /**
     * Get the HATEOAS link to reply to the message.
     *
     * @param \App\Message $message
     *
     * @return \GDebrauwer\Hateoas\Link|null
     */
    public function reply(Message $message)
    {
    }

    /**
     * Get the HATEOAS link to delete the message.
     *
     * @param \App\Message $message
     *
     * @return \GDebrauwer\Hateoas\Link|null
     */
    public function delete(Message $message)
    {
    }
}
