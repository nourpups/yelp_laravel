
<div class="col-12 border-2 shadow border mb-2 replay-div">
    <div class="media">
        <div class="media-body">
            <div class="d-flex justify-content-between">
                <h5 class="d-inline-block">
                    <a href="#" id="comment_reply_a" class="text-link">
                        <strong id="commpent_reply_username">Aana</strong>
                    </a>
                    <span id="reply_text">
                        added to Wish list
                    </span>
                    <p class="text-truncate" id="reply_time">Just Now...</p>
                </h5>
                <button comment_id="" class="cancel_reply border-theme bg-white rounded-circle position-relative text-theme m-4 p-3">
                    <span class=" lnr lnr-cross loved noti_icon text-theme valign"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<div id="leave_comment" class="media align-items-top mb-0 pl-2">
    <div class="media-body">
            <input type="hidden" id="comment_reply_id" value="">
            <div class="form-group mb-3">
                <input id="comment_username"  class="form-control w-50 d-inline-block bg-input p-3" placeholder="Give your name">
                <input type="number"  min="1" max="5" id="comment_rate"  class="form-control w-25 d-inline-block bg-input p-3" placeholder="Rate organisation">
            </div>
            <div class="form-group mb-3">
                <textarea
                    id="comment_text"
                    rows="4"
                    class="bg-input form-control text-editor"
                    placeholder="Short brief about your product..."
                >
                </textarea>
            </div>
            <button id="comment_organisation" class="btn btn-style px-4 py-2 text-white radius-5 text-capitalize">Comment</button>
    </div>
</div>
