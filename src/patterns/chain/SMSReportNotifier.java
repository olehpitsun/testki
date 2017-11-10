package patterns.chain;

/**
 * Created by Oleh on 10.11.2017.
 */
public class SMSReportNotifier extends Notifier {
    public SMSReportNotifier(int priority) {
        super(priority);
    }

    @Override
    public void write(String message) {
        System.out.println("Sending SMS " + message);
    }
}
