import $ from 'jquery';

function toggleFavorite(movieId, image, event) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    if (!csrfToken) {
        console.error('CSRF token not found');
        return;
    }

    $.ajax({
        url: '/favorites/toggle',
        type: 'POST',
        data: {
            movie_id: movieId,
            image: image,
            _token: csrfToken
        },
        success: function(data) {
            if (data.status === 'added' || data.status === 'removed') {
                location.reload();
            }
        }
    });
}

window.toggleFavorite = toggleFavorite;