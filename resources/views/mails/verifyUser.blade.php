@component('mail::message')

    Click the button below to verify the user.
    @component('mail::button', ['url' => "http://blog_practice.test/api/users/verify/${verifyCode}"])
        Verify Email
    @endcomponent
    This token only lasts for 5 minutes.

@endcomponent
