<div class="co-card-04-basic">
   
          <a href={{ $url ?? '' }}>
            <img src={{ Module::asset('frontend:'.$img ?? '')}} alt={{$alternate[0] ?? ''}}>
        </a>
    
    <div class="co-card-04-basic-detail">
           <a class="co-card-04-basic-detail-link" href={{ $url ?? '' }}>
            <p >
                {{ $title ?? '' }}
            </p>
        </a>
    </div>
  </div> 
