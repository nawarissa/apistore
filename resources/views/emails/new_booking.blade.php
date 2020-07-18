@component('mail::message')
Hello **{{$name}}**,
Thank you for choosing our restaurant!

Your booking has been created {{ $arrival }} on table {{ $table }}
for {{ $count }} people.

Sincerely,
Restaurant team.
@endcomponent
