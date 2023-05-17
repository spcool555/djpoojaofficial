lightbox.option({
  resizeDuration: 200,
  wrapAround: true,
  disableScrolling: true,
});
<script>
  // Get the link and modal elements
  var bookNowLink = document.getElementById('book-now-link');
  var bookNowModal = document.getElementById('book-now-modal');

  // Add a click event listener to the link
  bookNowLink.addEventListener('click', function(event) {
    // Prevent the default link behavior
    event.preventDefault();
    // Show the modal
    bookNowModal.style.display = 'block';
  });
</script>
