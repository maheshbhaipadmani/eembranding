

<?php include_once __DIR__ . '/../A_CONFIG/dbconnect.php';

class BLOG_Blog extends dbconnect
{
    public $BlogTitle;
    public $BlogID ;
    public $BlogContent;
    public $AuthorId;
    public $Thumbnail;
    public $Sequence;
    public $URL;
    public $Technology;
    public $MetaTitle;
    public $MetaImage;
    public $MetaDescription;
    public $MetaKeywords;
    public $DeletedAt;
    public $Description;
    public $CreatedDate;
    public $CreatedBy;
    public $ModifiedDate;
    public $ModifiedBy;
    public $ScheduledDate;

    //getuserid from mobilenumber 
    public function selectblrefog()
    {
        

        try {
            $select = "SELECT
                            BlogID,
                            BlogTitle,
                            BlogContent,
                            AuthorId,
                            Thumbnail,
                            Sequence,
                            URL,
                            Technology,
                            MetaTitle,
                            MetaImage,
                            MetaDescription,
                            MetaKeywords,
                            Description,
                            CreatedDate,
                            CreatedBy,
                            ModifiedDate,
                            ModifiedBy,
                            ScheduledDate
                        FROM BLOG_Blog
                        WHERE DeletedAt IS NULL
                        ORDER BY Sequence ASC;";


            $select1 = $this->connection->query($select);
            $row = mysqli_fetch_all($select1, MYSQLI_ASSOC);
       

            return $row;
           
        } catch (Exception $e) {
            return false;
        }
    }
    public function selectblog($page = 1, $limit = 6)
    {
        try {
            $offset = ($page - 1) * $limit;
    
            $query = "
                SELECT
                    BlogID,
                    BlogTitle,
                    BlogContent,
                    AuthorId,
                    Thumbnail,
                    Sequence,
                    URL,
                    Technology,
                    MetaTitle,
                    MetaImage,
                    MetaDescription,
                    MetaKeywords,
                    Description,
                    CreatedDate,
                    CreatedBy,
                    ModifiedDate,
                    ModifiedBy,
                    ScheduledDate
                FROM BLOG_Blog
                WHERE DeletedAt IS NULL
                ORDER BY Sequence ASC
                LIMIT $limit OFFSET $offset
            ";
    
            $result = $this->connection->query($query);
    
            if ($result) {
                return mysqli_fetch_all($result, MYSQLI_ASSOC);
            } else {
                return [];
            }
    
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function getBlogCount()
    {
        $query = "SELECT COUNT(*) AS total FROM BLOG_Blog WHERE DeletedAt IS NULL";
        $result = $this->connection->query($query);
        $row = $result->fetch_assoc();
        return $row['total'];
    }

    public function selectAllBlogs()
    {
        try {
            $query = "SELECT
                        BlogID,
                        BlogTitle,
                        BlogContent,
                        AuthorId,
                        Thumbnail,
                        Sequence,
                        URL,
                        Technology,
                        MetaTitle,
                        MetaImage,
                        MetaDescription,
                        MetaKeywords,
                        Description,
                        CreatedDate,
                        CreatedBy,
                        ModifiedDate,
                        ModifiedBy,
                        ScheduledDate
                    FROM BLOG_Blog
                    WHERE DeletedAt IS NULL
                    ORDER BY CreatedDate DESC";
    
            $result = $this->connection->query($query);
    
            if ($result) {
                return mysqli_fetch_all($result, MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (Exception $e) {
            return false;
        }
    }    
    
    
    //generate otp 
    public function getBlogByURL($url)
    {
        try {
            $url = mysqli_real_escape_string($this->connection, $url); // sanitize input
    
            $query = "
                SELECT
                    BlogID,
                    BlogTitle,
                    BlogContent,
                    AuthorId,
                    Thumbnail,
                    Sequence,
                    URL,
                    Technology,
                    MetaTitle,
                    MetaImage,
                    MetaDescription,
                    MetaKeywords,
                    Description,
                    CreatedDate,
                    CreatedBy,
                    ModifiedDate,
                    ModifiedBy,
                    ScheduledDate
                FROM BLOG_Blog
                WHERE URL = '$url' AND DeletedAt IS NULL
                LIMIT 1
            ";
    
            // ✅ Ensure query is not empty
            if (!empty($query)) {
                $result = $this->connection->query($query);
    
                if ($result && mysqli_num_rows($result) > 0) {
                    return mysqli_fetch_assoc($result);
                }
            }
    
            return null;
    
        } catch (Exception $e) {
            return false;
        }
    }
    
    
         
}