@extends('front.layout.layout')

@section('content')
<div class="page-header">
    <h1>Gallery</h1>
</div>
<div class="page-content">

    <div class="row ">
        <div class="col-3" style="padding:20px 0px;margin-right:80px">
            <ul style="list-style-type:none;">
                @foreach($galleryItems as $galleryItem)
                <li class="div-sizing gallery-item" id="{{ $galleryItem->id }}">{{ $galleryItem->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="col-8 ">
            <div class="card p-4">
                <div class="row  g-3 gallery-images">
                </div>
            </div>
            <!-- Images will be dynamically added here -->
        </div>
    </div>
    <!-- Add this HTML code to your page -->
    <div class="modal fade" id="image-preview-modal" tabindex="-1" role="dialog" aria-labelledby="image-preview-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="image-preview-modal-label">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" id="preview-image" src="" alt="Image Preview">
                </div>
            </div>
        </div>
    </div>


</div>
@endsection


@section('scripts')
@endsection
@section('custom-js')

<script>
    $(document).ready(function() {
        // Get the first gallery item
        var firstGalleryItem = $('.gallery-item:first');

        // Add the class to the first gallery item
        firstGalleryItem.addClass('sidebar-indicator');

        // Get the gallery item ID
        var firstItemId = firstGalleryItem.attr('id');

        // Make an AJAX request to fetch the images for the first item
        $.ajax({
            url: "{{ route('gallery.images', ':id') }}".replace(':id', firstItemId), // Update the route to fetch images for a specific gallery item
            type: "GET",
            dataType: 'json',
            success: function(response) {
                // Clear existing images
                $('.gallery-images').empty();
                // Add the fetched images to the second column
                $.each(response.images, function(index, imageUrl) {
                    var imgElement = $("<div class='col-4'><div class='card shadow-sm h-100'><img></div></div>").find('img')
                        .attr('src', imageUrl)
                        .addClass('h-100 gallery-image')
                        .click(function() {
                            showImagePreview(imageUrl);
                        })
                        .end();
                    $('.gallery-images').append(imgElement);
                });
            },
            error: function() {
                alert('Failed to fetch images for the selected item.');
            }
        });

        // Handle click event on gallery item
        $('.gallery-item').click(function() {
            // Remove the class from other gallery items
            $('.gallery-item').not(this).removeClass('sidebar-indicator');
            // Add the class to the clicked gallery item
            $(this).addClass('sidebar-indicator');
            // Get the gallery item ID
            var itemId = $(this).attr('id');
            // Make an AJAX request to fetch the images for the selected item
            $.ajax({
                url: "{{ route('gallery.images', ':id') }}".replace(':id', itemId), // Update the route to fetch images for a specific gallery item
                type: "GET",
                dataType: 'json',
                success: function(response) {
                    // Clear existing images
                    $('.gallery-images').empty();
                    // Add the fetched images to the second column
                    $.each(response.images, function(index, imageUrl) {
                        var imgElement = $("<div class='col-4'><div class='card shadow-sm h-100'><img></div></div>").find('img')
                            .attr('src', imageUrl)
                            .addClass('h-100 gallery-image')
                            .click(function() {
                                showImagePreview(imageUrl);
                            })
                            .end();
                        $('.gallery-images').append(imgElement);
                    });

                },
                error: function() {
                    alert('Failed to fetch images for the selected item.');
                }
            });
        });

        function showImagePreview(imageUrl) {
            // Set the image source
            $('#preview-image').attr('src', imageUrl);
            // Show the modal
            $('#image-preview-modal').modal('show');
        }
    });
</script>
@endsection