<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<?php
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
                    <div class="h4 mb-0">1</div>
                    <div class="weight-600 font-14">Cooking Adventures</div>
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
                    <div class="h4 mb-0">2</div>
                    <div class="weight-600 font-14">Travel Diaries</div>
                    <div class="small text-muted">Lets explore together</div>
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
                    <div class="h4 mb-0">3</div>
                    <div class="weight-600 font-14">Love & Connection</div>
                    <div class="small text-muted">Bringing you tales of love stories</div>
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
                                <div class="day">26</div>
                                <div class="month">Aug</div>
                            </div>
                            <div class="story-content">
                                <h5 class="font-weight-bold">Teaching you the fastest and easiest way to make that smokey naija Jollof Rice</h5>
                                <p class="story-excerpt">Join me as i guide you through the best way, giving you the perfect recipe to make that naija Jollof rice</p>
                                <div class="story-meta">
                                    <span class="badge badge-light-pink">Cooking Adventures</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="story-entry mb-4">
                        <div class="d-flex">
                            <div class="story-date text-center mr-4">
                                <div class="day">18</div>
                                <div class="month">Sept</div>
                            </div>
                            <div class="story-content">
                                <h5 class="font-weight-bold">Sunset Walks on Lagos Beach</h5>
                                <p class="story-excerpt">This weekend's trip to Lagos Beach was everything I needed.Had the nicest experience as the Beach House, the sound of the wave. I will be sharing more so you can plan your next visit to Lagos Nigeria and unwind..</p>
                                <div class="story-meta">
                                    <span class="badge badge-light-pink">Travel Diaries</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="story-entry mb-4">
                        <div class="d-flex">
                            <div class="story-date text-center mr-4">
                                <div class="day">05</div>
                                <div class="month">Jul</div>
                            </div>
                            <div class="story-content">
                                <h5 class="font-weight-bold">Love and Connection </h5>
                                <p class="story-excerpt">Everything you need to know about the perfect love story </p>
                                <div class="story-meta">
                                    <span class="badge badge-light-pink">Tales of togetherness</span>
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
                            <h5 class="mb-1">Cooking Adventures</h5>
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
                            <h5 class="mb-1">Love and Connection</h5>
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
                        <div class="date mb-2"> August 13, 2024</div>
                        <div class="title font-weight-bold">My West African Food Tour</div>
                        <div class="category small"><span class="badge badge-light-pink">Cooking Adventures</span></div>
                    </div>
                    <div class="upcoming-post mb-3 p-3 border-left border-primary" style="border-width: 3px !important;">
                        <div class="date mb-2">August 24, 2024</div>
                        <div class="title font-weight-bold">Hidden Beaches of Nigeria</div>
                        <div class="category small"><span class="badge badge-light-pink">Travel Diaries</span></div>
                    </div>
                    <div class="upcoming-post mb-3 p-3 border-left border-primary" style="border-width: 3px !important;">
                        <div class="date mb-2"> February 14, 2025</div>
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