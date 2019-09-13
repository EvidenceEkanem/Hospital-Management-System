{{-- {{ $email->content }} --}}

<h1>{{ $data['subject'] }}</h1>
<p>Hi, <b>{{ $data['name'] }}</b>. This is a mail notifying you of your <b>Patient Identification Number (PIN)</b></p>
<p><b>{{ $data['pin'] }}.</b></p>
<p>Thanks</p>