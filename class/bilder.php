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
    
    
    public function select($nameSt , $while , $limit)
    {   
        $newstr = substr($this->filds, 0, -1);
        echo $this->$newstr ;

        $this->setNameTable($nameTable);
        $this->setNameSt($nameSt);
        $this->setWhile($while);
        $this->setLimit($limit);


        $que = 'SELECT '.$newstr.' FROM '.$this->nameSt.' WHILE '.$this->while; 
        if($limit > 0){
            $que .= ' LIMIT '.$limit;
        }
        return $que ;
    }

    public function insert()
    {
        $this->setNameTable($nameTable);
        $this->setNameSt($nameSt);
        $que = 'INSERT INTO ';      

        return $que ;
    }

    public function update()
    {
        return $que ;
    }
    public function delete()
    {
        return $que ;
    }
    
    protected function setNameSt($nameSt){
        $this->nameSt = $nameSt;
    }
    protected function setNameTable($nameTable){
        
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
    function getNameTable()
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

    function setFild($fild)
    {   
        $str = $this->getFilds();
        $str .= $fild.',';
        $this->setFilds($str);

    }

}