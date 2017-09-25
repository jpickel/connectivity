<div class="desktop">
    <a target="_blank" href="<?php echo $ads['leaderboard']['link']; ?>" onclick="dataLayer.push({'event':'adClick','action':'Leaderboard','label':'<?php echo $ads['leaderboard']['label'];?>'})">
        <img class="ad-leaderboard" src="<?php echo $ads['leaderboard']['image']; ?>" alt="<?php echo $ads['leaderboard']['label'];?>">
    </a>
</div>

<div class="mobile">
    <a target="_blank" href="<?php echo $ads['m_skyscraper']['link']; ?>" onclick="dataLayer.push({'event':'adClick','action':'Mobile Skyscraper','label':'<?php echo $ads['m_skyscraper']['label'];?>'})">
        <img class="ad-m-skyscraper" src="<?php echo $ads['m_skyscraper']['image']; ?>" alt="<?php echo $ads['m_skyscraper']['label'];?>">
    </a>
</div>