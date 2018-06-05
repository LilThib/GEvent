using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;

namespace MyTestGmap
{
    class ModelEvent
    {
        private Connect con = new Connect();

        private List<Event> _events_list;
        public List<Event> Events_list
        {
            get { return _events_list; }
            set { _events_list = value; }
        }

        public ModelEvent()
        {
            this.Events_list = new List<Event>();
        }

        public int GetEvents()
        {
            // Ouverture de la connexion SQL
            if (con.OpenConnection())
            {
                // Création d'une commande SQL en fonction de l'objet connection
                MySqlCommand cmd = con.Connection.CreateCommand();

                // Requête SQL
                cmd.CommandText = "SELECT * FROM  t_events";

                MySqlDataReader data = cmd.ExecuteReader();
                int cpt = 0;
                while (data.Read())
                {

                    if (data["validate"] is null)
                    {

                    }
                    this.Events_list.Add(new Event((int)data["idEvent"],
                                                   (string)data["name"],
                                                   (string)data["description"],
                                                   (DateTime)data["date"],
                                                   (string)data["adress"],
                                                   (double)data["lat"],
                                                   (double)data["lng"],
                                                   (bool)data["private"],
                                                   data["validate"]));
                    cpt++;
                }
                data.Close();
                con.CloseConnection();
                return cpt;
            }
            else
                return 0;

        }

    }
}
