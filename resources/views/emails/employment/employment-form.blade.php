<h2>Employment Form Submission</h2>

<h3>Contact Information</h3>
<p><strong>Name:</strong> {{ $data['firstName'] }} {{ $data['lastName'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Location:</strong> {{ $data['city'] }}, {{ $data['state'] }}</p>

<h3>Dance Styles Taught</h3>
<p>{{ $data['danceStyles'] }}</p>

<h3>Tell Us Your Story</h3>
<p>{{ $data['story'] }}</p>

<h3>Additional Information</h3>
<p>{{ $data['additionalInfo'] }}</p>

<h3>Availability</h3>
<p>{{ $data['availability'] }}</p>

<h3>Resume</h3>
<p>Please find the attached resume.</p>

<br><br>
<strong>**DO NOT REPLY**</strong>
<br>Please compose a new message
