using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ASP.NET_MVC.Models
{
    public class Song
    {
        public string Name { get; set; }
        public string Artist { get; set; }
        public int GenreId { get; set; }
        public int Id { get; set; }
    }
}