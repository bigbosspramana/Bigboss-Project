<x-mail::message>
# Hello, you have got an enquiry!

<h3>Name : {{ $data['name']}}</h3>
<h3>Email : {{ $data['email']}}</h3>
<h3>Subject : {{ $data['subject']}}</h3>
<h3>Description : {{ $data['message']}}</h3>

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>