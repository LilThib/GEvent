using System;

namespace MyTestGmap
{
    public class Event
    {
        private int _id;
        public int Id
        {
            get { return _id; }
            set { _id = value; }
        }

        private string _name;
        public string Name
        {
            get { return _name; }
            set { _name = value; }
        }

        private string _description;

        public string Description
        {
            get { return _description; }
            set { _description = value; }
        }


        private string _adress;
        public string Adress
        {
            get { return _adress; }
            set { _adress = value; }
        }

        private double _lat;
        public double Lat
        {
            get { return _lat; }
            set { _lat = value; }
        }

        private double _lng;
        public double Lng
        {
            get { return _lng; }
            set { _lng = value; }
        }

        private DateTime _date;

        public DateTime Date
        {
            get { return _date; }
            set { _date = value; }
        }

        private bool _private;

        public bool Private
        {
            get { return _private; }
            set { _private = value; }
        }

        private ValidationState _state;

        public ValidationState State
        {
            get { return _state; }
            set { _state = value; }
        }


        public enum ValidationState
        {
            on_wait, validate, refused
        };


        public Event(int id, string name, string description, DateTime date, string adress, double lat, double lng, bool privateEvent, object state)
        {
            this.Id = id;
            this.Name = name;
            this.Description = description;
            this.Adress = adress;
            this.Lat = lat;
            this.Lng = lng;
            this.Date = date;
            if (state == null)
            {
                this.State = ValidationState.on_wait;
            }
            else if ((bool)state)
            {
                this.State = ValidationState.validate;
            }
            else
                this.State = ValidationState.refused;
            
            this.Private = privateEvent;
        }
        
        

    }
}
