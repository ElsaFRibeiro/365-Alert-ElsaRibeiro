@component('mail::message')
    # Hello from 365Alerts
    


    @component('mail::button', ['url' => ''])
        Button Text
        
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
