<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class Contacted extends Mailable {

    use Queueable,
        SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data) {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        $contact_title = '';
        foreach ($this->data['msg_title'] as $value) {
            $contact_title .= $value . '、';
        }

        return $this->view('mail.contact')
                ->subject($this->data['name'] . ' 様からのお問い合わせ')
                ->with([
                    'contact_name' => $this->data['name'],
                    'contact_name_kana' => $this->data['name_kana'],
                    'contact_company_name' => $this->data['company_name'],
                    'contact_tel_no' => $this->data['tel_no'],
                    'contact_mail' => $this->data['mail'],
                    'contact_msg_title' => $contact_title,
                    'contact_message' => nl2br($this->data['message'])
        ]);
    }

}
