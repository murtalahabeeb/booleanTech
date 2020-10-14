@component('mail::message')
# Message from {{$mail_data['name']}} <br>
{{$mail_data['phone']}}

{{$mail_data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{$mail_data['name']}}
@endcomponent
