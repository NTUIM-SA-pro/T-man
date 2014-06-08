@extends('home')
@section('right-container')
          <div class = "row">
               <div class="three column stackable ui grid">
                    <?php foreach ($works as $work) {?>
                    <div class="column">
                         <div class="ui segment">
                              <div class="ui dimmer">
                                   <div class="content">
                                        <div class="task-desc">
                                             <p>敘述：<?php echo $work->description; ?></p>
                                        </div>
                                        <div class="task-choose">
                                             <a class="ui green button" style="width:200px;text-align:center;">接任務</a>
                                        </div>
                                   </div>
                              </div>
                              <div class="task-label">HOT</div>
                              <div class="field">
                                   <img src="img/<?php echo $work->img?>" class="head-profile">
                              </div>
                              <div class="field">
                                   <div class="task-title">任務：<?php echo $work->name; ?></div>
                              </div>
                              <div class="field">
                                   <div class="task-creator">發起人:<?php echo $work->user_id;?></div>
                              </div>
                              <div class="field">
                                   <div class="task-date"><?php echo substr($work->dueTime, 5, 5);?></div>
                              </div>
                         </div>
                    </div>
                    <?php }?>
                    <div class="column">
                         <div class="ui segment">
                              <div class="ui dimmer">
                                   <div class="content">
                                        <div class="task-desc">
                                             <p >敘述：</p>
                                             <p>幫助警察建立工會blablabla^____^</p>
                                             <p>協助警察建立良好工作環境</p>
                                        </div>
                                        <div class="task-choose">
                                             <a class="ui green button" style="width:200px;text-align:center;">接任務</a>
                                        </div>
                                   </div>
                              </div>
                              <div class="task-label">HOT</div>
                              <div class="field">
                                   <img class="head-profile" src="img/police.jpg"/>
                              </div>
                              <div class="field">
                                   <div class="task-title">事情：幫忙警察組工會</div>
                              </div>
                              <div class="field">
                                   <div class="task-title">發起人：洨魯</div>
                              </div>
                             
                              <div class="field">
                                   <div class="task-date">5/21</div>
                              </div>
                         </div>
                    </div>
                    <div class="column">
                         <div class="ui segment">
                              <div class="ui dimmer">
                                   <div class="content" >
                                        <div class="task-desc">
                                             <p >敘述：</p>
                                             <p>徵求正妹伴遊政大</p>
                                             <p>哥有30cm^__^</p>
                                        </div>
                                        <div class="task-choose">
                                             <a class="ui green button" style="width:200px;text-align:center;">接任務</a>
                                        </div>
                                   </div>
                              </div>
                              <div class="field">
                                   <img class="head-profile" src="img/ccty.jpg"/>
                              </div>
                              <div class="field">
                                   <div class="task-title">事情：陪我去政大</div>
                              </div>
                              <div class="field">
                                   <div class="task-title">發起人：洨帥</div>
                              </div>
                             
                              <div class="field">
                                   <div class="task-date" >5/21</div>
                              </div>
                         </div>
                    </div>
                    <div class="column">
                         <div class="ui segment">
                              <div class="field">
                                   <img class="head-profile" src="img/police.jpg"/>
                              </div>
                              <div class="field">
                                   <div class="task-title">事情：幫忙警察組工會</div>
                              </div>
                              <div class="field">
                                   <div class="task-title">發起人：洨魯</div>
                              </div>
                             
                              <div class="field">
                                   <div class="task-date">5/21</div>
                              </div>
                         </div>
                    </div>
                    <div class="column">
                         <div class="ui segment">
                              <div class="field">
                                   <img class="head-profile" src="img/ccty.jpg"/>
                              </div>
                              <div class="field">
                                   <div class="task-title">事情：陪我去政大</div>
                              </div>
                              <div class="field">
                                   <div class="task-title">發起人：洨帥</div>
                              </div>
                              <div class="field">
                                   <div class="task-date">5/23</div>
                              </div>
                         </div>
                    </div>
                    <div class="column">
                         <div class="ui segment">
                              <div class="field">
                                   <img class="head-profile" src="img/penis.jpg"/>
                              </div>
                              <div class="field">
                                   <div class="task-title">事情：幫我領獎</div>
                              </div>
                              <div class="field">
                                   <div class="task-title">發起人：洨小魯</div>
                              </div>
                             
                              <div class="field">
                                   <div class="task-date">5/21</div>
                              </div>
                         </div>
                    </div>
                    <div class="column">
                         <div class="ui segment">
                              <div class="field">
                                   <img class="head-profile" src="img/police.jpg"/>
                              </div>
                              <div class="field">
                                   <div class="task-title">事情：幫忙警察組工會</div>
                              </div>
                              <div class="field">
                                   <div class="task-title">發起人：洨魯</div>
                              </div>
                             
                              <div class="field">
                                   <div class="task-date">5/21</div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
@stop