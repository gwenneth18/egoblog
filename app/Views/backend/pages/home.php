<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<?php
// Simplified dashboard content for a storytelling blog
?>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 mb-20">
        <div class="card-box p-4">
            <div class="welcome-message">
                <h2 class="text-pink mb-3">Welcome Back to Your Stories</h2>
                <p class="lead">Continue sharing your journey and experiences with the world.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 mb-20">
        <div class="card-box height-100-p widget-style">
            <div class="d-flex flex-wrap align-items-center">
                <div class="widget-data">
                    <div class="h4 mb-0">12</div>
                    <div class="weight-600 font-14">Culinary Adventures</div>
                    <div class="small text-muted">Stories about Jollof Rice and more</div>
                </div>
                <div class="widget-icon">
                    <div class="icon" style="background-color:#f8bbd0">
                        <i class="icon-copy fa fa-cutlery" style="color:#ec407a"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 mb-20">
        <div class="card-box height-100-p widget-style">
            <div class="d-flex flex-wrap align-items-center">
                <div class="widget-data">
                    <div class="h4 mb-0">15</div>
                    <div class="weight-600 font-14">Travel Diaries</div>
                    <div class="small text-muted">Chronicles of your adventures</div>
                </div>
                <div class="widget-icon">
                    <div class="icon" style="background-color:#f8bbd0">
                        <i class="icon-copy fa fa-plane" style="color:#ec407a"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 mb-20">
        <div class="card-box height-100-p widget-style">
            <div class="d-flex flex-wrap align-items-center">
                <div class="widget-data">
                    <div class="h4 mb-0">9</div>
                    <div class="weight-600 font-14">Love & Connection</div>
                    <div class="small text-muted">Tales of togetherness</div>
                </div>
                <div class="widget-icon">
                    <div class="icon" style="background-color:#f8bbd0">
                        <i class="icon-copy fa fa-heart" style="color:#ec407a"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-12 mb-20">
        <div class="card-box mb-30">
            <div class="pd-20 d-flex justify-content-between align-items-center">
                <h4 class="text-pink h4">Your Story Chapters</h4>
            </div>
            <div class="pb-20">
                <div class="story-entries p-3">
                    <div class="story-entry mb-4">
                        <div class="d-flex">
                            <div class="story-date text-center mr-4">
                                <div class="day">15</div>
                                <div class="month">Jun</div>
                            </div>
                            <div class="story-content">
                                <h5 class="font-weight-bold">The Day I Perfected Jollof Rice</h5>
                                <p class="story-excerpt">It was a rainy afternoon when I decided to experiment with my grandmother's recipe. The aroma filled the kitchen as I carefully balanced the spices...</p>
                                <div class="story-meta">
                                    <span class="badge badge-light-pink">Culinary Adventures</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="story-entry mb-4">
                        <div class="d-flex">
                            <div class="story-date text-center mr-4">
                                <div class="day">03</div>
                                <div class="month">Jun</div>
                            </div>
                            <div class="story-content">
                                <h5 class="font-weight-bold">Sunset Walks on Lagos Beach</h5>
                                <p class="story-excerpt">The sand between my toes, the sound of waves crashing against the shore, and the beautiful colors painting the sky. This weekend's trip to Lagos Beach was everything I needed...</p>
                                <div class="story-meta">
                                    <span class="badge badge-light-pink">Travel Diaries</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="story-entry mb-4">
                        <div class="d-flex">
                            <div class="story-date text-center mr-4">
                                <div class="day">22</div>
                                <div class="month">May</div>
                            </div>
                            <div class="story-content">
                                <h5 class="font-weight-bold">Our Pottery Class Adventure</h5>
                                <p class="story-excerpt">Laughter filled the room as our hands got covered in clay. Who knew making pottery together could strengthen our bond in such a meaningful way...</p>
                                <div class="story-meta">
                                    <span class="badge badge-light-pink">Love & Connection</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 mb-20">
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-pink h4">Story Categories</h4>
            </div>
            <div class="pb-20 px-3">
                <div class="category-list">
                    <div class="category-item d-flex align-items-center mb-3 p-2 border-bottom">
                        <div class="category-icon mr-3">
                            <i class="fa fa-cutlery" style="color:#ec407a"></i>
                        </div>
                        <div class="category-info">
                            <h5 class="mb-1">Culinary Adventures</h5>
                            <p class="mb-0 small">12 stories</p>
                        </div>
                    </div>
                    <div class="category-item d-flex align-items-center mb-3 p-2 border-bottom">
                        <div class="category-icon mr-3">
                            <i class="fa fa-plane" style="color:#ec407a"></i>
                        </div>
                        <div class="category-info">
                            <h5 class="mb-1">Travel Diaries</h5>
                            <p class="mb-0 small">15 stories</p>
                        </div>
                    </div>
                    <div class="category-item d-flex align-items-center mb-3 p-2 border-bottom">
                        <div class="category-icon mr-3">
                            <i class="fa fa-heart" style="color:#ec407a"></i>
                        </div>
                        <div class="category-info">
                            <h5 class="mb-1">Love & Connection</h5>
                            <p class="mb-0 small">9 stories</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-pink h4">Publishing Schedule</h4>
            </div>
            <div class="pd-20">
                <div class="schedule-calendar">
                    <div class="upcoming-post mb-3 p-3 border-left border-primary" style="border-width: 3px !important;">
                        <div class="date mb-2">Monday, June 20, 2023</div>
                        <div class="title font-weight-bold">My West African Food Tour</div>
                        <div class="category small"><span class="badge badge-light-pink">Culinary Adventures</span></div>
                    </div>
                    <div class="upcoming-post mb-3 p-3 border-left border-primary" style="border-width: 3px !important;">
                        <div class="date mb-2">Friday, June 24, 2023</div>
                        <div class="title font-weight-bold">Hidden Beaches of Nigeria</div>
                        <div class="category small"><span class="badge badge-light-pink">Travel Diaries</span></div>
                    </div>
                    <div class="upcoming-post mb-3 p-3 border-left border-primary" style="border-width: 3px !important;">
                        <div class="date mb-2">Tuesday, June 28, 2023</div>
                        <div class="title font-weight-bold">5 Unique Date Ideas</div>
                        <div class="category small"><span class="badge badge-light-pink">Love & Connection</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.text-pink {
    color: #ec407a !important;
}

.badge-primary, .btn-primary {
    background-color: #ec407a;
    border-color: #ec407a;
}

.badge-light-pink {
    background-color: #fce4ec;
    color: #ec407a;
}

.story-date {
    width: 60px;
}

.story-date .day {
    font-size: 24px;
    font-weight: bold;
    color: #ec407a;
}

.story-date .month {
    font-size: 14px;
    color: #888;
}

.story-excerpt {
    color: #555;
    font-size: 14px;
    line-height: 1.6;
}

.welcome-message {
    background: linear-gradient(to right, rgba(255,255,255,0.9), rgba(255,255,255,0.7)), 
                url('/images/placeholder-thumb.jpg');
    background-size: cover;
    background-position: center;
    padding: 20px;
    border-radius: 10px;
}

.category-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #fce4ec;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

.border-primary {
    border-color: #ec407a !important;
}
</style>
 <?= $this->endSection() ?>