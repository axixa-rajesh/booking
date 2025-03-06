<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;

use App\Models\Schedule as Sc;
use App\Models\TodaySchedule as TS;
use Livewire\Component;

class TodaySchedule extends Component
{
    public $firm,$firm_id,$todayschedule;
    protected $listeners = ['callMethod' => 'store'];
    
    public function mount($firm = null)
    {
        $this->firm = $firm;
        $this->firm_id = $firm->id ?? null;
    }
    public function render()
    {
        $day=date('l');
        $this->todayschedule = Sc::where('firm_id', $this->firm->id)->where('week',$day)->get();
        //dd($this->todayschedule);
        return view('livewire.today-schedule');
    }
    public function store(){
        dd("ok");
        // $scdata=Sc::find($sid);
        // $info=[
        //     'schedule_id'=>$sid,
        //     'firm_id'=>$this->firm->id,
        //     'user_id'=>Auth::user()->id,
        //     'week'=> $scdata->week,
        //     'shift' => $scdata->shift,
        //     'todaydate'=>date('Y-m-d')
        // ];
        // TS::create($info);        
    }
}
