<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Setting;

class AdminSettingsComponent extends Component
{
	public $email;
	public $phone;
	public $phone2;
	public $address;
	public $map;
	public $twitter;
	public $facebook;
	public $pinterest;
	public $instragram;
	public $youtube;
	
	public function mount()
	{
		$setting = Setting::find(1);
		if($setting){
			$this->email = $setting->email;
			$this->phone = $setting->phone;
			$this->phone2 = $setting->phone2;
			$this->address = $setting->address;
			$this->map = $setting->map;
			$this->twitter = $setting->twitter;
			$this->facebook = $setting->facebook;
			$this->pinterest = $setting->pinterest;
			$this->instragram = $setting->instragram;
			$this->youtube = $setting->youtube;	
		}

	}

	public function updated($fields)
	{
		$this->validateOnly($fields,[
			  'email'=>'required|email',
			 'phone'=>'required',
			 'phone2'=>'required',
			 'address'=>'required',
			 'map'=>'required',
			 'twitter'=>'required',
			 'facebook'=>'required',
			 'pinterest'=>'required',
			 'instragram'=>'required',
			 'youtube'=>'required'
		]);
	}

	public function saveSettings()
	{
		$this->validate([
			 'email'=>'required|email',
			 'phone'=>'required',
			 'phone2'=>'required',
			 'address'=>'required',
			 'map'=>'required',
			 'twitter'=>'required',
			 'facebook'=>'required',
			 'pinterest'=>'required',
			 'instragram'=>'required',
			 'youtube'=>'required'
		]);

		$setting = Setting::find(1);
		if(!$setting)
		{
			$setting = new Setting();
		}
			$setting->email = $this->email;
			$setting->phone = $this->phone;
			$setting->phone2 = $this->phone2;
			$setting->address = $this->address;
			$setting->map = $this->map;
			$setting->twitter = $this->twitter;
			$setting->facebook = $this->facebook;
			$setting->pinterest = $this->pinterest;
			$setting->instragram = $this->instragram;
			$setting->youtube = $this->youtube;
			$setting->save();
			session()->flash('message','Setting has been saved Successfully!');

		}


    public function render()
    {
        return view('livewire.admin.admin-settings-component')->layout('layouts.base');
    }
}
