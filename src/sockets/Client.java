package sockets;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.Socket;
import java.net.UnknownHostException;
import java.util.Scanner;

/**
 * Created by Oleh on 14.03.2018.
 */
public class Client {

    private String ipaddr;
    private int port;
    Socket scketClient;

    public Client(String hostname, int port) {
        this.ipaddr = hostname;
        this.port = port;
    }

    public boolean connect() throws UnknownHostException, IOException {
        System.out.println("підєднання до " + ipaddr + ":" + port);
        scketClient = new Socket(ipaddr,port);
        System.out.println("Успішне з єднання");
        return true;
    }

    public void readResponse() throws UnknownHostException,IOException {
        String userInput;
        BufferedReader stdIn = new BufferedReader(new InputStreamReader(scketClient.getInputStream()));
        System.out.println("Відповідь від сервера ");

        while ((userInput = stdIn.readLine()) != null){
            System.out.println(userInput);
        }
    }

    public static void main(String[] args) {
        Scanner scanObj = new Scanner(System.in);

        System.out.println("Введіть порт для підключення до сервера ");
        int port = Integer.parseInt(scanObj.nextLine());

        System.out.println("введіть IP адресу");
        String IPadress = scanObj.nextLine();

        Client client = new Client(IPadress, port);

        try {
            client.connect();
            while (client.connect()) {
                client.readResponse();
            }
        }catch (UnknownHostException e){
            System.out.println("Невідомий хост");
        }catch (IOException e){
            System.out.println("Невдається встановити зєднання");
        }


    }
}
