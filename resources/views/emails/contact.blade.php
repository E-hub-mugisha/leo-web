<h1>Contact Form Submission</h1>
<!-- Embedding the logo -->
<img src="{{ public_path('assets/img/logo.png') }}" alt="Company Logo" style="max-width: 200px;">
<p>Name: {{ $names }}</p>
<p>Email: {{ $email }}</p>
<p>subject: {{ $subject }}</p>
<p>phone: {{ $phone }}</p>
<p>Message: {{ $messages }}</p>
