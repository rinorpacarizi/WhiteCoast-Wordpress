<!-- will be responsible for displaying comments -->
<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
							<?php 
                            if( !have_comments()){
                               echo "Leave a Comment";
                            }
                            else{
                                get_comments_count(). "Comments";
                            }
                            ?>

						</div><!-- .comments-header -->

						<div class="comments-inner">

                        <?php
                        wp_list_comments(
                            
                        );
                        ?>

						</div><!-- .comments-inner -->

					</div><!-- comments -->

					<hr class="" aria-hidden="true">
					<div id="respond" class="comment-respond">
						<h2 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
									id="cancel-comment-reply-link" href="/?p=1#respond" style="display:none;">Cancel
									reply</a></small></h2>
					</div><!-- #respond -->

				</div>