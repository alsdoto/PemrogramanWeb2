
<form action="{{ route('send.email') }}" method="post">
    @csrf
    <label for="subject">Subject:</label>
    <input type="text" name="subject" required>
    <br>
    <label for="message">Message:</label>
    <textarea name="message" rows="4" required></textarea>
    <br>
    <label for="recipient">Recipient Email:</label>
    <input type="email" name="recipient" required>
    <br>
    <button type="submit">Send Email</button>
</form>
