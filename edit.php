$fetch = mysqli_query($conn,"SELECT * FROM majina");

if (!$fetch){
echo "Fetching fail";
}else{
while ($row = mysqli_fetch_assoc($fetch)){
extract($row);