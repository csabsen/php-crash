<?php include 'inc/header.php'; ?>
<?php
$sql = 'SELECT * FROM feedback';
$result = $conn->query($sql);
$feedback = $result->fetch_all(MYSQLI_ASSOC);
?>

    <h2>Feedback</h2>

  <?php if (empty($feedback)): ?>
    <p class="lead mt3">Theres no feedback</p>
  <?php endif; ?>
  <?php foreach ($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt2">
        By <?php echo $item['name'] . ' on ' . $item['date']; ?>
      </div>
     </div>
   </div>
  <?php endforeach; ?>
   
   <?php include 'inc/footer.php'; ?>

 ?>