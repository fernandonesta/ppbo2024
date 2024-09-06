class Publisher{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    // Getter untuk phone
    public function getPhone() {
        return $this->phone;
    }

    // Setter untuk phone
    public function setPhone($phone) {
        $this->phone = $phone;
    }

    // Metode untuk mendapatkan informasi penerbit
    public function getPublisherInfo() {
        return "Publisher: {$this->name}\n" .
               "Address: {$this->address}\n" .
               "Phone: {$this->getPhone()}";
    }

}