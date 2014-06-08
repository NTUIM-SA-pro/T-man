@extends('layouts.default')
@section('content')
    <div class="ui grid">
    @foreach($works as $work)
        <div class="four wide column">
            <div class="ui segment">
                <div class="ui dimmer">
                     <div class="content">
                          <div class="task-desc">
                               <p>敘述：{{$work->description}}</p>
                          </div>
                          <div class="task-choose">
                               <a class="ui green button" style="width:200px;text-align:center;">接任務</a>
                          </div>
                     </div>
                </div>
                <div class="task-label">HOT</div>
                <div class="field">
                     <img src="<?php echo $work->img?>" class="head-profile">
                </div>
                <div class="field">
                     <div class="task-title">任務：{{$work->name}}</div>
                </div>
                <div class="field">
                     <div class="task-creator">發起人:{{$work->user_id}}</div>
                </div>
                <div class="field">
                     <div class="task-date"><?php echo substr($work->dueTime, 5, 5);?></div>
                </div>
            </div>
        </div>
    @endforeach
    </div>

@stop