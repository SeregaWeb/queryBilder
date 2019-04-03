<? 
class bilder
{
    protected $que;
    protected $nameTable;
    protected $nameSt;
    protected $while;
    protected $limit;
    protected $filds;
    function __construct()
    {
        $this->setLimit(0);
    }
    
    public function selectQuery( $while , $limit)
    {   
        $newstr = substr($this->filds, 0, -1);
        echo $this->newstr ;

        $newname = substr($this->nameTable, 0, -1);
        echo $this->newname;
        
        $this->setWhile($while);
        $this->setLimit($limit);

        if($while != false){
            $this->que = 'SELECT '.$newstr.' FROM '.$newname.' WHILE '.$this->while; 
        }else{
            $this->que = 'SELECT '.$newstr.' FROM '.$newname; 

        }
        if($limit > 0){
            $this->que .= ' LIMIT '.$limit;
        }
       return $this->que;
    }

    public function insert()
    {
        $this->setNameTable($nameTable);
        $this->setNameSt($nameSt);
        $que = 'INSERT INTO ';      

        $this->que;
    }

    public function update()
    {
        return $this->que;
    }
    public function delete()
    {
        return $this->que;
    }
    
    protected function setNameSt($nameSt){
        $this->nameSt = $nameSt;
    }
    protected function setNameTables($nameTable){
        
        $this->nameTable = $nameTable;
        
    }
    protected function setWhile($while){
        $this->while = $while;
    }
    protected function setLimit($limit){
        $this->limit = $limit;
    }
    function getNameSt()
    {
        return $this->nameSt;
    }
    function getNameTables()
    {
        return $this->nameTable;
    }
    function getWhile()
    {
        return $this->while;
    }
    function getLimit()
    {
        return $this->limit;
    }

    function getFilds()
    {
        return $this->filds;
    }

    protected function setFilds($fild)
    {
        $this->filds = $fild;
    }

    public function setFild($fild)
    {   
        if(preg_match("/^[a-z0-9]+$/i", $fild)){
            $str = $this->getFilds();
            $str .= $fild.',';
            $this->setFilds($str);
        }else{
            echo 'bad value! -> '.$fild.'<pre>';
            return ;
        }

    }

    public function setNameTable($name){
        if(preg_match("/^[a-z0-9]+$/i", $name)){
            $str = $this->getNameTables();
            $str .= $name.',';
            $this->setNameTables($str);
        }else{
            echo 'bad value! -> '.$name.'<pre>';
            return ;
        }
    }

}