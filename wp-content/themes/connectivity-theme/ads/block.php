<div class="desktop">
    <a target="_blank" href="<?php echo $ads['block']['link']; ?>" onclick="dataLayer.push({'event':'adClick','action':'Block','label':'<?php echo $ads['block']['label'];?>'})">
        <img class="ad-block" src="<?php echo $ads['block']['image']; ?>" alt="<?php echo $ads['block']['label'];?>">
    </a>
</div>

<div class="mobile">
    <a target="_blank" href="<?php echo $ads['m_leaderboard']['link']; ?>" onclick="dataLayer.push({'event':'adClick','action':'Mobile Leaderboard','label':'<?php echo $ads['m_leaderboard']['label'];?>'})">
        <img class="ad-m-leaderboard" src="<?php echo $ads['m_leaderboard']['image']; ?>" alt="<?php echo $ads['m_leaderboard']['label'];?>">
    </a>
</div>