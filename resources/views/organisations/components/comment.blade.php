<div id="comment_{{$comment->id}}"class="media align-items-top mb-4 pl-2">
   <div class="media-body">
       <h6 class="mb-1">
           {{ $comment->username }}
           <div class="insight-posted-date mb-2">
               <span class="text-grey ml-0 ml-md-0">{{ $comment->created_at->format('Y-m-d H:i:s') }}</span>
           </div>
       </h6>
       <div class="rating-blk d-inline-block">
           <ul class="list-group list-group-horizontal float-left">
               @for($i = 0; $i < $comment->rate; $i++)
                   <li class="pr-1">
                       <span class="fa fa-star"></span>
                   </li>
               @endfor
           </ul>
           <span class="rating__count">( {{ $comment->rate }} Rating )</span>
       </div>
       <div class="cmt-text d-block text-grey">
           {!! $comment->text !!}
       </div>
   </div>
   <div class="amt-rect-sale d-inline-block float-right">
        <a href="#" class="reply" comment_id="{{$comment->id}}"><span class="text-theme">Reply</span></a>
    </div>
</div>

