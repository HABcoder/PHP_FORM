
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">We value your feedback!</h2>
    <form action='recev.php' method='post'>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your name" name='Name'>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name='Email'>
      </div>
      <div class="mb-3">
        <label class="form-label">Rating</label>
        <select class="form-select" id="rating" name='rating'>
          <option selected disabled>Choose a rating</option>
          <option value="Excellent">Excellent</option>
          <option value="Very Good">Very Good</option>
          <option value="Good">Good</option>
          <option value="2">Fair</option>
          <option value="1">Poor</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">What would you like us to improve?</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="improvements[]" value="Service" id="service">
          <label class="form-check-label" for="service">Service</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="improvements[]" value="Quality" id="quality">
          <label class="form-check-label" for="quality">Product Quality</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="improvements[]" value="Pricing" id="pricing">
          <label class="form-check-label" for="pricing">Pricing</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="improvements[]" value="Speed" id="speed">
          <label class="form-check-label" for="speed">Delivery Speed</label>
        </div>
      </div>

      <div class="mb-3">
        <label for="comments" class="form-label">Comments</label>
        <textarea class="form-control" id="comments" rows="4" placeholder="Share your thoughts..." name='comments'></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name='ins'>Submit Feedback</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
