<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <table class="w-full mt-4 border">
        <thead>
            <tr>
                <th class="border p-2">S.No</th>
                <th class="border p-2">Week</th>
                <th class="border p-2">Shift</th>
                <th class="border p-2">Start From</th>
                <th class="border p-2">End From</th>
                <th class="border p-2">Maximum Booking</th>
                <th class="border p-2">Today Schedule</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todayschedule as $info)
                <tr>
                    <td class="border p-2">{{ $loop->iteration }}</td>
                    <td class="border p-2">{{ $info['week'] }}</td>
                    <td class="border p-2">{{ $info['shift'] }}</td>
                    <td class="border p-2">{{ $info['start_from'] }}</td>
                    <td class="border p-2">{{ $info['end_from'] }}</td>
                    <td class="border p-2">{{ $info['max_booking'] }}</td>
                    <td class="border p-2">
                        {{-- <button wire:click="delete({{ $info['id'] }})" class="btn btn-danger">Delete</button> --}}
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" onclick="createsch(this.checked,'{{ $info['id'] }}')" role="switch" id="flexSwitchCheckChecked">
                           
                        </div>
                    </td>
                </tr>
            @endforeach
            @if (!count($todayschedule))
                <tr>
                    <th colspan="7" class="text-muted text-center p-4">No Data Available</th>
                </tr>
            @endif
        </tbody>
    </table>

</div>
<script>
    function createsch(bool,id){
        if(bool){
             Livewire.emit('callMethod');
           
        }else{
             //Livewire.emit('delete');

        }
    }
</script>
